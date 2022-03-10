<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\Files;
use yii\bootstrap4\Modal;
use yii\web\Controller;
use yii\web\UploadedFile;

class Pr8Controller extends Controller
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

	public function actionIndex()
	{
		$model = Product::find()
			->asArray()
			->joinWith('files', '`files`.`id_product` = `product`.`Id`')
			->joinWith('category', '`category`.`Id` = `product`.`id_category`')
			->orderBy(['Id' => SORT_DESC])
			->all();

		return $this->render('index', compact('model'));
	}

	public function actionAdd()
	{
		$model = new Product();

		if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()) {
				$model->upload();
				return $this->redirect('index');
			}
		}

		return $this->render('add', compact('model'));
	}
}
