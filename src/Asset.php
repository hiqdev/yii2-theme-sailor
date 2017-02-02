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
        'skins/default.css',
        'bodybg/bg1.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        BootstrapPluginAsset::class,
    ];
}
