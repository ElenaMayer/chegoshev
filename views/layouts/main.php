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
<body class="stretched overlay-menu side-header side-header-right open-header close-header-on-scroll">
<?php $this->beginBody() ?>

<div id="wrapper" class="clearfix">

    <div id="header-trigger" class="d-none d-lg-block">
        <a href="/logout">
            <i class="icon-line2-logout"></i>
        </a>
    </div>

    <section id="content">
        <?= $content ?>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark border-top-0">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap">

                <div class="row clearfix">

                    <div class="col-lg-7 col-md-6">
                        <div class="widget">
                            <div class="row col-mb-30 mb-0">

                                <div class="col-lg-6">
                                    <div class="footer-big-contacts">
                                        <span>Телефон:</span>
                                        +7-919-999-9909
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="footer-big-contacts">
                                        <span>Email:</span>
                                        info@canvas.com
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">

                        <div class="clearfix" data-class-xl="float-end" data-class-lg="float-end" data-class-md="float-end" data-class-sm="" data-class-xs="">
                            <a href="#" class="social-icon si-rounded si-small si-colored si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-rounded si-small si-colored si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container text-center text-uppercase">

                Copyrights &copy; 2022 Все права защищены.

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
