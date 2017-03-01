<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\CampusPosts */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="campus-posts-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'date')->textInput(['maxlength' => 200, 'readonly' => true, 'value' => date('F Y')]) ?>
        <?php $dataCategory = ArrayHelper::map(\app\models\Categories::find()->all(),'category','category'); ?>
        <?= $form->field($model, 'category')->dropDownList($dataCategory, ['id'=>'category'])->hint('Category of Article'); ?>
        
        <?= $form->field($model, 'title')->textInput()->hint('Title of Article') ?>
        <?= $form->field($model, 'picture')->textInput()->hint('Name of picture (3 words max. No space allowed. Use underscore. e.g cubbing_oil_glot). '
                . '                                             Thereafter, go back and upload picture') ?> 
        <?= $form->field($model, 'caption')->textInput()->hint('Picture Caption') ?>
        <?= $form->field($model, 'post')->textArea()->hint('Copy and paste Article here!') ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>

