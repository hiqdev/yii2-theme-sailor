<?php

use hiqdev\thememanager\menus\AbstractMainMenu;
use hiqdev\thememanager\widgets\LogoLink;
use hiqdev\themes\flat\widgets\Menu;
use yii\widgets\Breadcrumbs;

?>
<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="topleft-info">
                        <li><i class="fa fa-phone"></i> +62 088 999 123</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="text"
                                   value="" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search" title="Click to start searching"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= LogoLink::widget([
                    'image' => '@hiqdev/themes/sailor/assets/img/logo.png',
                    'imageOptions' => [
                        'width' => '199',
                        'height' => '152',
                    ]
                ]) ?>
            </div>
            <div class="navbar-collapse collapse">
                <?= AbstractMainMenu::widget([], [
                    'class' => Menu::class,
                    'options' => ['class' => 'nav navbar-nav'],
                ]) ?>
            </div>
        </div>
    </div>
</header>

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
<?php endif ?>

<?= $content ?>
