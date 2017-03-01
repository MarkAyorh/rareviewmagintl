<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventsAndPlaces */
/* @var $form yii\widgets\ActiveForm */
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="padding-left: 2%; width: 60%" class="events-and-places-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6])->hint('Event title. It must be same for all pictures for same event') ?>

    <?= $form->field($model, 'picture_name')->textInput(['maxlength' => 40])->hint('Name of picture e.g "image1", "image2", etc. Then go and upload picture; pls use same name there') ?>

    <?= $form->field($model, 'short_note')->textarea(['rows' => 6])->hint('Short note describing event. Fill this box once and subsequently fill "same" for other pictures of same event') ?>

    <?= $form->field($model, 'caption')->textarea(['rows' => 6])->hint('Caption describing who are in the picture') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
