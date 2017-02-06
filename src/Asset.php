<?php

namespace hiqdev\themes\sailor;

use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/sailor/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/style.css',
        'skins/blue.css',
        'bodybg/bg2.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/modernizr.custom.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.appear.js',
        'js/uisearch.js',
        'js/classie.js',
        'js/custom.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        BootstrapPluginAsset::class,
        FlexSliderAsset::class,
        CubePortfolioAsset::class,
    ];
}
