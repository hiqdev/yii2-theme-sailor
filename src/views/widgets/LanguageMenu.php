<?php

use yii\bootstrap\BootstrapPluginAsset;
use yii\helpers\Html;

/** @var array $items */

BootstrapPluginAsset::register($this);

$this->registerJs(<<<'JS'
// Language chooser popover
$('#languageChooser').popover({
    container: 'body',
    placement: 'bottom',
    trigger: 'click',
    template: '<div class="popover language-popover" role="tooltip"><div class="arrow"></div><div class="popover-content"></div></div>',
    html: true,
    content: function() {
        return jQuery('#languageChooserContent').html();
    }
});
JS
);
$this->registerCss("
.language-popover .popover-content ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    overflow: hidden;
}
.language-popover .popover-content li {
    display: inline;
    padding: 0 20px 0 40px;
    line-height: 2em;
}
.language-popover .popover-content li a:hover { 
    text-decoration: none;    
}
");
?>
<a href="#" data-toggle="popover" id="languageChooser" data-original-title="" title="">
    <?= strtoupper(substr($language, 0, 2)) ?> <span class="caret"></span>
</a>
<div id="languageChooserContent" class="hidden">
    <ul class="unstyled">
        <?php foreach ($items as $code => $data) : ?>
            <li>
                <?= Html::a($data['label'], $data['url']) ?>
            </li>
        <?php endforeach ?>
    </ul>
</div>
