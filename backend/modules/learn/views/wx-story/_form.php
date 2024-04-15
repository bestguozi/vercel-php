<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\modules\wx\models\WxStory $model */
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
                            <label class="form-label"><?=$model->getAttributeLabel('author')?></label>
                            <?php echo Html::activeTextInput($model, 'author', ['class'=>'form-control']);?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?=$model->getAttributeLabel('story_name')?></label>
                            <?php echo Html::activeTextInput($model, 'story_name', ['class'=>'form-control']);?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?=$model->getAttributeLabel('category_id')?></label>
                            <?php echo Html::activeTextInput($model, 'category_id', ['class'=>'form-control']);?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?=$model->getAttributeLabel('thumb')?></label>
                            <?php echo Html::activeTextInput($model, 'thumb', ['class'=>'form-control']);?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?=$model->getAttributeLabel('story_content')?></label>
                            <?php echo Html::activeTextInput($model, 'story_content', ['class'=>'form-control']);?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?=$model->getAttributeLabel('create_at')?></label>
                            <?php echo Html::activeTextInput($model, 'create_at', ['class'=>'form-control']);?>
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