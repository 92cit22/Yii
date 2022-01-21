<?php
/* @var $this yii\web\View */

/* @var $model MatrixModel */

use app\models\MatrixModel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin([
        'action'=>['matrix/select'],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-8 invalid-feedback'],
        ],
    ]); ?>

<table>
    <?php foreach($model->arr as $krow => $row): ?>
        <tr class="">
        <?php foreach($row as $kcol => $column): ?>
            <?= $form->field($model, "arr[$krow][$kcol]")->hiddenInput(['value'=>$column])->label('') ?>
            <td <?= $model->select == $column ? 'class="select"' : '' ?>><?= print_r($column, true) ?></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

<?= !$model->select ? $form->field($model, 'select')->input('number', ['placeholder' => 'Выделить'])->label('') : '' ?>

<?= !$model->select ? Html::submitButton('Выделить', ['class' => 'btn-submit']) : '' ?>
<?php ActiveForm::end(); ?>