<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CampusCommentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="campus-comments-search">

        <?php
        $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',
        ]);
        ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'date') ?>

        <?= $form->field($model, 'time') ?>

        <?= $form->field($model, 'title') ?>

        <?= $form->field($model, 'name') ?>

        <?php // echo $form->field($model, 'location') ?>

        <?php // echo $form->field($model, 'email_address') ?>

            <?php // echo $form->field($model, 'comment')  ?>

        <div class="form-group">
<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>

<?php ActiveForm::end(); ?>

    </div>
</div>