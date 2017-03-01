<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="admin-index" style="background-color: #fff; min-height: 220px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 0; padding-top: 3%">
        <p>
            &nbsp;
        </p>
        <a href="javascript:javascript:history.go(-1)"><< Go back to choose another action</a>

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'quote')->textarea()->hint('Insert quote here') ?>

        <div class="form-group">
            <?= Html::submitButton('Click to upload quote', ['class' => 'btn btn-primary']) ?>
        </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>

