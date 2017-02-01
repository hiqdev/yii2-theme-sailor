<?php

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
