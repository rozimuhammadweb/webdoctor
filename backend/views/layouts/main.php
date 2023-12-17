<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Web Doctor - Medical & Hospital </title>
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <div class="main-wrapper">
        <?= \backend\widgets\Header::widget() ?>
        <?= \backend\widgets\Sidebar::widget() ?>

        <main class="page-wrapper">
            <?= $content ?>
        </main>
    </div>
    <?php $this->endBody() ?>
    </html>
<?php $this->endPage();
