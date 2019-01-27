<?php

namespace app\controllers;

use app\models\Product;
use yii\helpers\VarDumper;
use yii\web\Controller;

class A {


}

class TestController extends Controller
{


    /**
     *
     */
    public function actionIndex()
    {
//        $obj = new A();
//        $obj->var = 123;

        $model = new Product(
            ['id' => 1, 'name' => ' One ', 'created_at' => '12']
        );
        $model->validate();
        //return VarDumper::dumpAsString($model->getAttributes(), 5, true);
        return VarDumper::dumpAsString($model->activeAttributes(), 5, true);
        $model->id = 11;
        $model->name = 'First';


        return $this->render('index', [
            'data' => \Yii::$app->test->run(),
            'model' => $model,
        ]);
    }
}
