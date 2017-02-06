<?php
use yii\helpers\Html;

?>

<?php if ($image) : ?>
    <a class="navbar-brand" href="/">
        <?= Html::img($image, ['height' => 52]) ?>
    </a>
<?php endif ?>

