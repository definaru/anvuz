<?php
namespace frontend\components\widget;

use Yii;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
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


    public function registerClientScript(string $id)
    {
        EditorAsset::register($this->view);
        $csrf = Yii::$app->request->csrfToken;
        $height = $this->options['height'] ? $this->options['height'] : 500;
        $content = $this->options['content'] ? $this->options['content'] : '';
        $folder = $this->options['folder'] ?? uniqid();
        $jsContent = Json::encode($content, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $js = <<<JS

        //const defaultToolbar = toastui.Editor.getDefaultOptions().toolbarItems[0];
        const editor = new toastui.Editor({
            el: document.querySelector('#$id'),
            toolbarItems: [
                ['heading', 'bold', 'italic', 'strike'],
                ['hr', 'quote'],
                ['ul', 'ol', 'task', 'indent', 'outdent'],
                ['table', 'image', 'link'],
                ['code', 'codeblock'],
                [{
                    name: 'fullScreen',
                    tooltip: 'На весь экран',
                    el: fullScreenButton,
                }]
            ],
            placeholder: 'Пожалуйста, введите сюда основной текст...',
            height: '$height'+'px',
            initialEditType: 'wysiwyg',
            previewStyle: 'vertical',
            language: 'ru',
            initialValue: $jsContent,
            hooks: {
                addImageBlobHook: async (blob, callback) => {
                    const formData = new FormData();
                    formData.append('file', blob);
                    formData.append('_csrf', '$csrf');
                    formData.append('folder', '$folder');
                    try {
                        const response = await fetch('/api/v1/image', {
                            method: 'POST',
                            body: formData
                        });
                        const result = await response.json();
                        callback(result.url);
                    } catch (error) {
                        console.log('Ошибка загрузки изображения:', error);
                        callback(null);
                    }
                }
            }
        });
        editor.getMarkdown();
        JS;
        $this->view->registerJs($js, View::POS_END);
    }
}