<?php
/**
 * Sailor theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-sailor
 * @package   yii2-theme-sailor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\sailor\widgets;

use hiqdev\themes\sailor\FlexSliderAsset;
use yii\base\Widget;

class Featured extends Widget
{
    public function init()
    {
        parent::init();
        $this->registerJS();
    }

    public function run()
    {
        return $this->render('Featured');
    }

    protected function registerJS()
    {
        $view = $this->getView();
        FlexSliderAsset::register($view);
        $view->registerJs('
        
        ');
    }
}
