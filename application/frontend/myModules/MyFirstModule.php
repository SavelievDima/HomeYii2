<?php

namespace app\myModules;

class MyFirstModule extends \yii\base\Module
{
    public $controllerNamespace = 'app\myModules\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
