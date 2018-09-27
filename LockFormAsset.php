<?php

/*
 * This file is part of the light/yii2-lock-form.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace light\widgets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the widget.
 *
 * @version 1.0.2
 *
 * @author lichunqiang <light-li@hotmail.com>
 * @license MIT
 */
class LockFormAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $js = ['lock.js'];
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';

        parent::init();
    }
}
