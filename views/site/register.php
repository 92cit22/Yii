<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\User */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = !empty($_GET['id']) ? 'Редактирование аккаунта' : 'Регистрация';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= !empty($_GET['id']) ? 'Для изменения данных аккаунта заполните все поля:' : 'Для регистрации аккаунта заполните ВСЕ поля:' ?></p>

    <?php $form = ActiveForm::begin([
        'id' => 'registration-form',
        'options' => ['enctype' => 'multipart/form-data'],
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"offset-lg-3 col-lg-4\">{hint}\n{error}</div>",
            'labelOptions' => ['class' => 'col-lg-3 col-form-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'Username')->input('text', ['autofocus' => true, 'placeholder' => 'Введите логин']) ?>

    <?= $form->field($model, 'Password')->passwordInput(['placeholder' => 'Введите пароль']) ?>

    <?= $form->field($model, 'confirmPassword')->passwordInput(['placeholder' => 'Повторите пароль']) ?>

    <?= $form->field($model, 'Email')->input('email', ['placeholder' => 'Введите адрес электронной почты']) ?>

    <?= $form->field($model, 'FIO')->input('text', ['placeholder' => 'Введите ФИО']) ?>

    <?= $form->field($model, 'myAvatar', [
        'template' => "{label}<div class=\"input-group col-lg-9\">{input}</div><div class=\"offset-lg-3 col-lg-9\">{hint}\n{error}</div>",
        'labelOptions' => ['class' => 'col-lg-3 col-form-label'],
    ])->fileInput() ?>

    <div class="form-group row">
        <div class="offset-lg-3 col-lg-9 padding-form">
            <?= Html::submitButton(!empty($_GET['id']) ? 'Изменить' : 'Зарегистрироваться', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
        </div>
    </div>

    <div class="form-group row">
        <p class="offset-lg-3 col-lg-9 padding-form">
            Уже есть аккаунт?<br>
            <?= Html::a('Авторизироваться', \yii\helpers\Url::to('/site/login')) ?>
        </p>
    </div>

    <?php ActiveForm::end(); ?>
</div>