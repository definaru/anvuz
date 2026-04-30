<?php
    use frontend\components\widget\Card;
    use frontend\components\icons\Icons;
    $this->registerCss('
        [data-bs-theme=dark] {
            .bg-white {
                --bs-white-rgb: 8, 4, 22;
                background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
            }
            .document a, span {
                --bs-primary: #fff;
                color: var(--bs-primary);
                & svg {
                    stroke: #411fab;
                }
            }
        }
        .document a, span {
            --bs-primary: #000;
            color: var(--bs-primary);
            &:hover {
                --bs-primary: #411fab;
                color: var(--bs-primary);
            }
            & svg {
                stroke: blue;
            }
        }
    ');
    // $list = [
    //     [
    //         'title' => Yii::t('app', 'charter_of_the_ansu'),
    //         'document' => '/data/document/Устав.pdf',
    //         'href' => 'charter',
    //         'subtitle' => Yii::t('app', 'file').': Устав.pdf'
    //     ],
    //     [
    //         'title' => Yii::t('app', 'application_for_membership'),
    //         'document' => '/data/document/Форма заявления.docx',
    //         'href' => 'zayavlenie-o-vstuplenii',
    //         'subtitle' => Yii::t('app', 'file').': Форма_заявления.docx'
    //     ],
    // ];
    $list = $content['content']['lists']
?>
<section class="pb-5 document">
    <div class="container my-5" style="height: 700px">
        <div class="row g-3 py-5">
            <?php foreach($list as $item) { 
                $type = empty($item['body']) ? 'documents' : 'file'; 
                $file = empty($item['body']) ? '' : ': "'.basename($item['body']).'"'; 
                $document = empty($item['body']) ? false : $item['body']; 
            ?>
                <div class="col-md-4 col-12 d-grid h-100">
                    <?php Card::begin([
                        'title' => $item["title"],
                        'action' => $type === 'file' ? 'Скачать документ' : null,
                        'icon' => Icons::Download(),
                        'href' => '/document/'.$item["href"],
                        'document' => $document,
                        //'document' => $item["document"],
                        'subtitle' => Yii::t('app', $type).$file,//$item["subtitle"],
                        'padding' => 'p-3',
                        'ratio' => 'ratio-16x9',
                        'tag' => 'h4'
                    ]);?>
                    <?php Card::end(); ?> 
                </div>
            <?php } ?>
        </div>
    </div>
</section>