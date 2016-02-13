yii2-lock-form
-----------
[![version](https://img.shields.io/packagist/v/light/yii2-lock-form.svg?style=flat-square)](https://packagist.org/packages/light/yii2-lock-form)
[![Download](https://img.shields.io/packagist/dt/light/yii2-lock-form.svg?style=flat-square)](https://packagist.org/packages/light/yii2-lock-form)
[![Issues](https://img.shields.io/github/issues/lichunqiang/yii2-lock-form.svg?style=flat-square)](https://github.com/lichunqiang/yii2-lock-form/issues)

Make form submit button disabled when the form submit.

## Install

```
$ composer require light\yii2-lock-form=~1.0.2
```

## Usage

Can can depends this in your assets:

>if you depends on `yii2-bootstrap`, you can use `light\widgets\LockBsFormAsset` instead. So can decrease the asset size.

```
class YourAsset extends AssetBundle
{
    //..

    public $depends = [
        //your other depends
        'light\widgets\LockFormAsset'
    ];
}
```

Or directly inject in the view:

```
use light\widgets\LockFormAsset;

LockFormAsset::register($this);
```


## License

![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
