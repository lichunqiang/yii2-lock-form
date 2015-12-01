<?php namespace light\widgets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the widget
 *
 * @package light\widgets
 * @version 1.0.0
 * @author lichunqiang <light-li@hotmail.com>
 * @license MIT
 */
class LockFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = ['assets/lock.bootstrap.js'];

    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__;

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
