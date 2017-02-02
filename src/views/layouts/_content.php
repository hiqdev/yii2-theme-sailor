<?php

use hiqdev\themes\sailor\widgets\Callaction;
use hiqdev\themes\sailor\widgets\Featured;
use yii\widgets\Breadcrumbs;

?>
<?php if (!Yii::$app->themeManager->isHomePage()) : ?>
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
    <section id="content">
        <div class="container">
            <?= $content ?>
        </div>
    </section>
<?php else: ?>
    <?= Featured::widget() ?>
    <?= Callaction::widget() ?>
    <section id="content">
        <?= $content ?>
    </section>
<?php endif ?>

