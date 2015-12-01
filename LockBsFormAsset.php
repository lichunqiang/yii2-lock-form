<?php namespace light\widgets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the widget
 *
 * Use this bundle when you have install yii2-bootstrap
 *
 * @package light\widgets
 * @version 1.0.0
 * @author lichunqiang <light-li@hotmail.com>
 * @license MIT
 */
class LockBsFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = ['assets/lock.js'];

    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__;

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
