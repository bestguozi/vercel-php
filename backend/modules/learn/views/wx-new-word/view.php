<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\modules\wx\models\WxNewWord $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wx New Words', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lesson',
            'word',
            'visualize',
            'phrase',
        ],
    ]) ?>

            </div>
        </div>
    </div>

