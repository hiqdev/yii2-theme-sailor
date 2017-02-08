<?php

use hiqdev\thememanager\menus\AbstractMainMenu;
use hiqdev\thememanager\widgets\LogoLink;
use hiqdev\themes\flat\widgets\Menu;
use yii\helpers\Html;

?>
<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="topleft-info">
                        <li><i class="fa fa-envelope-o"></i>
                            24/7 <?= Yii::t('hisite', 'tech support') ?> <?= Html::mailto(Yii::$app->params['supportEmail'], Yii::$app->params['supportEmail']) ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <?= \hiqdev\thememanager\menus\AbstractNavbarMenu::widget([], [
                        'options' => [
                            'class' => 'topleft-info list-inline pull-right',
                        ],
                    ]) ?>
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
                <?= LogoLink::widget() ?>
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

