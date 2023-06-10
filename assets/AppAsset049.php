<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset049 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template049/css/core.css',
        'template049/css/components.css',
        'template049/css/icons.css',
        'template049/css/pages.css',
        'template049/css/responsive.css',
    ];
    public $js = [
        'template049/js/modernizr.min.js',
        'template049/js/bootstrap.min.js',
        'template049/js/detect.js',
        'template049/js/fastclick.js',
        'template049/js/jquery.slimscroll.js',
        'template049/js/jquery.blockUI.js',
        'template049/js/waves.js',
        'template049/js/wow.min.js',
        'template049/js/jquery.nicescroll.js',
        'template049/js/jquery.scrollTo.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
