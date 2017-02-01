<?php

namespace hiqdev\themes\sailor;


use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class CubePortfolioAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/sailor/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/cubeportfolio.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/jquery.cubeportfolio.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
