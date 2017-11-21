<?php
/**
 * Sailor theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-sailor
 * @package   yii2-theme-sailor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

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
