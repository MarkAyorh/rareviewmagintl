<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form ActiveForm */
?>

<?php
$this->title = 'Post a Comment';
$this->params['breadcrumbs'][] = $this->title;
?>

</script>
<div class="admin-index" style="background-color: #fff; min-height: 550px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="col-lg-5">
        <div style=" padding-top: 10px; color: #0000cc">
            Fill the form below and click submit to post your comment.
        </div>

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'date')->hiddenInput(['readonly' => true, 'value' => date('d-M-Y')]) ?>
        <?= $form->field($model, 'time')->hiddenInput(['readonly' => true, 'value' => gmdate('g:ia e', time())]) ?>
        <?= $form->field($model, 'title')->textInput(['readonly' => true, 'value' => $open_title]) ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'location') ?>
        <?= $form->field($model, 'email_address') ?>
        <?= $form->field($model, 'comment')->textarea() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit Comment', ['class' => 'btn btn-primary']) ?>
            &nbsp; &nbsp; &nbsp; &nbsp;
            
        <a href="javascript:javascript:history.go(-1)">
            <button class="btn btn-primary" type="button" style="color: #fff; background-color: #F00;">
                Cancel Comment   
            </button>
        </a>  
            
        </div>
        <div>
            &nbsp;
        </div>
        
    <?php ActiveForm::end(); ?>
        

</div><!-- comments-form -->
</div>
