<?php

use yii\widgets\ActiveForm;
?>
<div class="admin-index" style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 0">        
        <a href="javascript:javascript:history.go(-1)"><< Go back to choose another action</a>
        <p>
            &nbsp;
        </p>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'file')->fileInput() ?>

        <button>Upload</button>

        <?php ActiveForm::end(); ?>
    </div>
</div>
