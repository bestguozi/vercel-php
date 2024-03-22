<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\wx\models\WxNewWord $model */

$this->title = 'Create Wx New Word';
$this->params['breadcrumbs'][] = ['label' => 'Wx New Words', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
