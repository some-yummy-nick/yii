<?php

namespace app\assets;

use yii\web\AssetBundle;


class BasicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/show.css',
    ];

}
