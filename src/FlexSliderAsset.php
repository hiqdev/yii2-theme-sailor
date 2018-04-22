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

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FlexSliderAsset extends AssetBundle
{
    public $sourcePath = '@hiqdev/themes/sailor/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'plugins/flexslider/flexslider.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'plugins/flexslider/jquery.flexslider-min.js',
        'plugins/flexslider/flexslider.config.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
