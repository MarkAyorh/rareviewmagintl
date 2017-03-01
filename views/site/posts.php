<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ArticlesUpload */
/* @var $form ActiveForm */
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto;">
    <div class="posts">

    <?php $form = ActiveForm::begin(); ?>
        <p>
            &nbsp;
        </p>
         <?= $form->field($model, 'date')->textInput(['readonly' => true, 'value' => date('F Y')]) ?>
        
        <?= $form->field($model, 'category')->dropDownList([
            'opinion' => 'Opinion', 
            'interview' => 'Interview',
            'health' => 'Health',
            'energy' => 'Energy',
            'seminar-and-events' => 'Seminars and Events',
            'global-scene' => 'Global Scene',
            'wonderful-world' => 'Wonderful World',
            'gists-and-trends' => 'Gists and Trends',
            'comment' => 'Comment'
            ])->hint('Category of Article') ?>
        <?= $form->field($model, 'title')->textInput()->hint('Title of Article') ?>
        <?= $form->field($model, 'picture')->textInput()->hint('Name of picture (3 words max. No space allowed. Use underscore. e.g cubbing_oil_glot). '
                . '                                             Thereafter, go back and upload picture') ?>        
        <?= $form->field($model, 'post')->textArea()->hint('Copy and paste Article here!') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Up Load', ['class' => 'btn btn-primary']) ?>
        </div>
        <div>
            &nbsp;
        </div>
    <?php ActiveForm::end(); ?>
    </div>

</div>
