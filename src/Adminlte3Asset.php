<?php

/**
 * @copyright Copyright &copy; Agus Suhartono, molexui.github.io, 2024
 * @package yii2-adminlte3
 * @subpackage yii2-widget-alert
 * @version 1.0.0
 */

namespace molexui\adminlte3;

use yii\web\AssetBundle;

/**
 * Asset bundle for AdminLte3 for Yii2.
 *
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0.0
 */
class Adminlte3Asset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets';
    public $css = [
        'css/adminlte.min.css',
    ];

    public $js = [
        'js/adminlte.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
