<?php
/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @project yii2-app-practical
 * @version 1.0.0
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@frontend';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
