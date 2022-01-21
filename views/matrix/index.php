<?php
/* @var $this yii\web\View */

/* @var $model MatrixModel */

use app\models\MatrixModel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin([
        'action'=>['matrix/generate'],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-8 invalid-feedback'],
        ],
    ]); ?>

    <h4>Размер</h4>
    <div class="field-row center">
        <?= $form->field($model, 'rows')->input('number', ['placeholder' => 'Строк'])->label('') ?>
        <?= $form->field($model, 'columns')->input('number', ['placeholder' => 'Столбцов'])->label('') ?>
    </div>

    <h4>Значения</h4>
    <div class="field-row center">
        <?= $form->field($model, 'min')->input('number', ['placeholder' => 'min'])->label('') ?>
        <?= $form->field($model, 'max')->input('number', ['placeholder' => 'max'])->label('') ?>
    </div>
<?= Html::submitButton('Создать', ['class' => 'btn-submit']) ?>
<?php ActiveForm::end(); ?>