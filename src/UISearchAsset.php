<?php

namespace hiqdev\themes\sailor;


use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class UISearchAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/sailor/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/uisearch.js',
        'js/classie.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
