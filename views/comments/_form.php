<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="padding-left: 2%; width: 60%" class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput(['readonly' => true, 'maxlength' => 20]) ?>

    <?= $form->field($model, 'time')->textInput(['readonly' => true, 'maxlength' => 20]) ?>

    <?= $form->field($model, 'title')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['readonly' => true, 'maxlength' => 20]) ?>

    <?= $form->field($model, 'location')->textInput(['readonly' => true, 'maxlength' => 40]) ?>

    <?= $form->field($model, 'email_address')->textInput(['readonly' => true, 'maxlength' => 40]) ?>

    <?= $form->field($model, 'comment')->textarea(['readonly' => true, 'rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>

</div>
