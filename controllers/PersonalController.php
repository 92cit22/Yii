<?php

namespace app\controllers;

use app\models\Personal;
use yii;

class PersonalController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionAdd($id = null)
    {
        if (is_null($id))
            $model = new Personal();
        else if (!$model = Personal::findOne($id))
            return $this->render('error', ['message' => 'Запись не найдена']);

        if ($model->load(Yii::$app->request->post()) && $model->Check == true)
            if ($model->validate())
                if ($model->save())
                    return $this->redirect('/');

        return $this->render('add', compact('model'));
    }

    public function actionIndex()
    {
        $model = Personal::find()->orderBy(['Id' => SORT_DESC])->all();
        return $this->render('index', compact('model'));
    }

    public function actionView(int $id)
    {
        if (!$model = Personal::findOne($id))
            return $this->render('error', ['message' => 'Запись не найдена']);

        if ($model->load(Yii::$app->request->post()) && $model->Check == true)
            //    if ($model->validate())
            if ($model->save())
                return $this->redirect('/personal');
        return $this->render('add', compact('model'));
    }
}
