<?php
/**
 * Sailor theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-sailor
 * @package   yii2-theme-sailor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

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
        'css/custom.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/modernizr.custom.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.appear.js',
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
