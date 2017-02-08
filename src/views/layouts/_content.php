<?php

use yii\widgets\Breadcrumbs;

?>
<?php if (!Yii::$app->themeManager->isHomePage() && empty($this->blocks['subHeader'])) : ?>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?= Breadcrumbs::widget([
                        'homeLink' => ['label' => '<i class="fa fa-home"></i>', 'url' => '/'],
                        'encodeLabels' => false,
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="callaction">
        <?= $this->blocks['subHeader'] ?>
    </section>
<?php endif ?>
<section id="content">
    <div class="container">
        <?= $content ?>
    </div>
</section>

