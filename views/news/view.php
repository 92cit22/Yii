<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">


    <!-- <p>
        <?= Html::a('Update', ['update', 'Id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->

    <div class="card bg-dark">
        <img class="card-img" src="/<?= $model->Picture ?>" alt="<?= $model->Title ?>" width="150px">
        <div class="card-img-overlay">
            <h5 class="card-title"><?= $model->Title ?></h5>
            <p class="card-text"><?= $model->Description ?></p>
            <p><?= $model->user->FIO ?></p>
        </div>
    </div>
</div>