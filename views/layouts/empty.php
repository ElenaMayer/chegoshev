<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => 'images/favicon-16x16.png', 'sizes' => '16x16']); ?>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => 'images/favicon-32x32.png', 'sizes' => '32x32']); ?>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => 'images/favicon-96x96.png', 'sizes' => '96x96']); ?>
    <?php $this->head() ?>
</head>
<body class="stretched overlay-menu">
<?php $this->beginBody() ?>

<div id="wrapper" class="clearfix">

    <section id="content">
        <?= $content ?>
    </section><!-- #content end -->

</div><!-- #wrapper end -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
