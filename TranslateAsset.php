<?php

namespace yac\yii18n;

use yii\web\AssetBundle;

class TranslateAsset extends AssetBundle
{

    public $sourcePath = __DIR__ ;

    public $js = [
        'assets/js/yii.translator.js'
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}
