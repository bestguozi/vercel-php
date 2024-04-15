<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\wx\models\WxStory $model */

$this->title = 'Create Wx Story';
$this->params['breadcrumbs'][] = ['label' => 'Wx Stories', 'url' => ['index']];
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
