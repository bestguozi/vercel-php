<?php

use backend\modules\wx\models\WxStory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wx Stories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-body">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col"><h1><?= Html::encode($this->title) ?></h1></div>
            <div class="col-auto ms-auto d-print-none">
            </div>
        </div>
        <div class="row row-deck row-cards">
            <div class="card">
                <div class="card-body">


    <p>
        <?= Html::a('Create Wx Story', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


                    <?= \yii\grid\GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            [
                                    'class'=>\yii\grid\DataColumn::class,
                                    'headerOptions' => ['width' => '5%'],
                                    'attribute'=>'id'
                            ],
                            'story_name',
                            [
                                'class' => \yii\grid\DataColumn::class,
                                'headerOptions' => ['width' => '10%'],
                                'label'=>'Actions',
                                'format'=>'html',
                                'value'=> function($model){
                                    return Html::a('Update', ['update', 'id' => $model->id], ['class' => '']) . ' ' .
                                        Html::a('Delete', ['delete', 'id' => $model->id], [
                                            'class' => '',
                                            'data' => [
                                                'confirm' => 'Are you sure you want to delete this item?',
                                                'method' => 'post',
                                            ],
                                        ]);
                                }
                            ],
                        ],
                    ]) ?>


                </div>
            </div>
        </div>

