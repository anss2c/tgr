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
class AppAssetLogin extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
	public $sourcePath = '@bower/NiceAdmin/';
    public $css = [
		'assets/vendor/bootstrap/css/bootstrap.min.css',
		'assets/vendor/bootstrap-icons/bootstrap-icons.css',
		'assets/vendor/boxicons/css/boxicons.min.css',
		'assets/vendor/quill/quill.snow.css',
		'assets/vendor/quill/quill.bubble.css',
		'assets/vendor/remixicon/remixicon.css',
		'assets/vendor/simple-datatables/style.css',
		'assets/css/style.css',
    ];
    public $js = [
		'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
		'assets/vendor/chart.js/chart.umd.js',
		'assets/vendor/echarts/echarts.min.js',
		'assets/vendor/quill/quill.js',
		'assets/vendor/simple-datatables/simple-datatables.js',
		'assets/vendor/tinymce/tinymce.min.js',
		'assets/vendor/php-email-form/validate.js',
		'assets/js/main.js',
		'assets/vendor/tinymce/tinymce.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
