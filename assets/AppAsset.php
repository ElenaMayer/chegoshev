<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'style.css',
        "css/dark.css",
        "css/font-icons.css",
//        "one-page/css/et-line.css",
        "css/animate.css",
        "css/magnific-popup.css",
        "css/components/datepicker.css",
        "css/components/timepicker.css",
        "css/components/daterangepicker.css",
//        "one-page/css/fonts.css",
        "css/custom.css",
    ];
    public $js = [
        "js/jquery.js",
        "js/plugins.min.js",
//        "js/functions.js",
        "js/components/moment.js",
        "js/components/timepicker.js",
        "js/components/datepicker.js",
        "js/components/daterangepicker.js",
        "js/chart.js",
        "js/chart-utils.js",
        "js/chart-custom.js",
        "js/custom.js",
    ];
}
