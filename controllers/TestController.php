<?php

namespace app\controllers;

use yii\base\Controller;
use app\models\TestForm;
use Yii;

class TestController extends Controller
{
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

    // public function actionInfo()
    // {
    //     return $this->render('info');
    // }

    public function actionTest()
    {
        $model = new TestForm();
        // var_dump($model->name);
        // die;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            return $this->render('info',compact(['model']));
        }
        else{
            return $this->render('index', ['model' => $model]);
        }

    }
}
