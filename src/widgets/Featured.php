<?php

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
        $view->registerJs("
        
        ");
    }
}
