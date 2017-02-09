<?php

use yii\widgets\Breadcrumbs;

$isHomePage = Yii::$app->themeManager->isHomePage();
?>

<?php if ($isHomePage) : ?>
    <?= $this->blocks['subHeader'] ?>
    <section id="content">
        <?= $content ?>
    </section>
<?php else: ?>
    <?php if ($this->params['breadcrumbs']) : ?>
        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?= Breadcrumbs::widget([
                            'homeLink' => ['label' => '<i class="fa fa-home"></i>', 'url' => '/'],
                            'encodeLabels' => false,
                            'links' => !empty($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
    <?= $this->blocks['subHeader'] ?>
    <section id="content">
        <div class="container">
            <?= $content ?>
        </div>
    </section>
<?php endif; ?>




