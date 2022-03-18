<?php

use app\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $model yii\models\News */
/* @var $this yii\web\View */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <? if (Yii::$app->user->can('Redactor')) : ?>
        <p>
            <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <? endif; ?>
    <div class="card-columns">

        <?php foreach ($model as $key => $value) : ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> <?= Html::a($value->Title, ['view', 'Id' => $value->Id]) ?></h5>
                    <? if (Yii::$app->user->can('Adminictrator')) : ?>
                        <?= Html::a('Редактировать', ['update', 'Id' => $value->Id], ['class' => 'card-link text-warning']) ?>
                        <?= Html::beginForm(['/news/delete?Id=' . $value->Id], 'post', ['class' => 'd-inline-flex'])
                            . Html::submitButton(
                                'Удалить',
                                ['class' => 'btn btn-link card-link text-danger']
                            )
                            . Html::endForm() ?>
                    <? endif; ?>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <?= LinkPager::widget([
        'pagination' => $pages,
        'class' => 'pagination',
        'pageCssClass' => 'page-item',
        'linkOptions' => [
            'class' => 'page-link'
        ],
        'disabledListItemSubTagOptions' => [
            'class' => 'page-link'
        ]
    ]) ?>
</div>