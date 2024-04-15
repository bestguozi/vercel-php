<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\modules\wx\models\WxNewWord $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php $form =  \yii\widgets\ActiveForm::begin(['options'=>['class'=>'card']]); ?>
<div class="card-header">
    <h4 class="card-title"><?=$this->title?></h4>
</div>
<div class="card-body">
    <div class="row g-5">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="mb-3"><?php echo $form->errorSummary($model);?></div>
                    <div class="mb-3">
                        <label class="form-label"><?=$model->getAttributeLabel('lesson')?></label>
                        <?php echo Html::activeTextInput($model, 'lesson', ['class'=>'form-control']);?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><?=$model->getAttributeLabel('word')?></label>
                        <?php echo Html::activeTextInput($model, 'word', ['class'=>'form-control']);?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><?=$model->getAttributeLabel('visualize')?></label>
                        <?php echo Html::activeTextInput($model, 'visualize', ['class'=>'form-control']);?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><?=$model->getAttributeLabel('phrase')?></label>
                        <?php echo Html::activeTextInput($model, 'phrase', ['class'=>'form-control']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <div class="d-flex">
            <?php echo Html::submitButton($conntent="Submit", ['class'=>'btn btn-primary']);?>
        </div>
    </div>
</div>
<?php \yii\widgets\ActiveForm::end();?>
