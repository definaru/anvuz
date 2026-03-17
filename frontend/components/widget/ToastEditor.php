<?php
namespace frontend\components\widget;

use Yii;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;
use frontend\assets\EditorAsset;


class ToastEditor extends InputWidget
{
    public $options = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $id = $this->options['id'];
        $this->registerClientScript($id);
        return Html::tag('div', $this->value, ['id' => $id]);
    }


    public function registerClientScript($id)
    {
        EditorAsset::register($this->view);
        // $this->options = ArrayHelper::merge(
        //     $this->options, []
        // );
        // $options = Json::encode($this->options);
        $csrf = Yii::$app->request->csrfToken;
        $height = $this->options['height'] ? $this->options['height'] : 500;
        $js = <<<JS
        const editor = new toastui.Editor({
            el: document.querySelector('#$id'),
            height: '$height'+'px',
            initialEditType: 'wysiwyg',
            previewStyle: 'vertical',
            initialValue: '',
            language: 'ru',
            // initialValue: $('#$id').val(),
            hooks: {
                addImageBlobHook: async (blob, callback) => {
                    const formData = new FormData();
                    formData.append('file', blob);
                    formData.append('_csrf', '$csrf');

                    const response = await fetch('/api/v1/image', {
                        method: 'POST',
                        body: formData
                    });

                    const result = await response.json();
                    callback(result.url);
                }
            }
        });
        editor.getMarkdown();

        $('form').on('submit', function() {
            $('#$id').val(editor.getMarkdown());
        });
        JS;
        $this->view->registerJs($js, View::POS_END);
    }


    // protected function registerAssets($id)
    // {
    //     $view = $this->getView();
    // }

}