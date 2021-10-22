<?php

namespace app\controllers;

use app\models\UserForm;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionAdd(): string
    {
        $model = new UserForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->addToFile();
                return $this->render('complete');
            }

            return '<pre>' . print_r($model, true) . '</pre>';
        }

        return $this->render('add', compact('model'));
    }

}
