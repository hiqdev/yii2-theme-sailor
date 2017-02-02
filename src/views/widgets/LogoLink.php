<?php
use yii\helpers\Html;

?>

<?php if ($image) : ?>
    <a class="navbar-brand" href="/">
        <?= Html::img($image, ['width' => 199, 'height' => 52]) ?>
    </a>
<?php endif ?>

