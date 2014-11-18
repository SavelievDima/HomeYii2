<?php

namespace app\myModules\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $time = Date('Y:m:d H:i:s');
        return $this->render('index', ['time' => $time,]);
    }
}
