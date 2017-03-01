<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Categories;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
$dataCategory = ArrayHelper::map(Categories::find()->all(),'category','category');
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="posts-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'date')->textInput(['maxlength' => 200, 'readonly' => true, 'value' => date('F Y')]) ?>
        
        <?= $form->field($model, 'category')->dropDownList($dataCategory, ['id'=>'category'])->hint('Pick Category of Post'); ?>
        
        <?= $form->field($model, 'title')->textInput()->hint('Title of Post') ?>
        
        <?= $form->field($model, 'picture')->textInput()->hint('Name of picture (3 words max. No space allowed. Use underscore. e.g cubbing_oil_glot). '
                . '                                             Thereafter, go back and upload picture') ?>  
        <?= $form->field($model, 'caption')->textInput()->hint('Picture Caption') ?>
        <?= $form->field($model, 'post')->textArea()->hint('Copy and paste Article here!') ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    &nbsp;
</div>
