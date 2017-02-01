<?php

/**
 * Theme main layout.
 *
 * @var \yii\web\View View
 * @var string $content Content
 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/_head') ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
    <?= $this->render('//layouts/_before_header') ?>
    <?= $this->render('//layouts/_header') ?>
    <?= $this->render('//layouts/_after_header') ?>
    <?= $this->render('//layouts/_content', compact('content')) ?>
    <?= $this->render('//layouts/_after_content') ?>
    <?= $this->render('//layouts/_footer') ?>
    <?= $this->render('//layouts/_after_footer') ?>

    <?php $this->endBody() ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</body>
</html>
<?php $this->endPage() ?>
