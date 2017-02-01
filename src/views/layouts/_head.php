<?php

/**
 * Head layout.
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>
    <title><?= Html::encode($this->title) ?></title>
<?= Html::csrfMetaTags() ?>
<?php

$this->head();

Yii::$app->get('themeManager')->registerAssets();

$this->registerMetaTag(
    [
        'charset' => Yii::$app->charset,
    ]
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1.0',
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]
);
