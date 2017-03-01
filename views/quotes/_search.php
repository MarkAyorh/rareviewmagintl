<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuotesSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">    
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/posts/admin-to-do"><< Go back to choose another Activity</a>
    </div>
    <div class="quotes-search">

        <?php
        $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',
        ]);
        ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'quote') ?>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    &nbsp;
</div>
