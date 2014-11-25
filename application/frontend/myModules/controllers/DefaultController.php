<?php

namespace app\myModules\controllers;


use app\models\Product;
use yii\web\Controller;
use yii;




class DefaultController extends Controller
{

    public function actionIndex()
    {
        $products = Product::find('')
            ->orderBy('id')
            ->all();



        $time = Date('Y:m:d H:i:s');

        return $this->render('index', [
            'time' => $time,
            'products' => $products

        ]);

    }
    public  function actionModel()
    {

    }
}
