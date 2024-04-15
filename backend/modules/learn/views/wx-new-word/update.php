<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\wx\models\WxNewWord $model */

$this->title = 'Update Wx New Word: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wx New Words', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

            </div>
        </div>
    </div>

