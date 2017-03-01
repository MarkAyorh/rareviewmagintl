<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Relationships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 300px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="width: 100%; background-color: #4eb305">
    <div class="site-contact" style="width: 80%; margin-left: 3%; background-color: #FFE0E1; padding-left: 2%">
        <h1>&nbsp;</h1>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

<?php else: ?>

            <p>
                We have open spaces for those who wish to bring their services by way of employment partnership and collaborations, to bear on our efforts to deliver on our mission. <br>
            </p>
            <p>
                Our special appeal in this area for collaboration and partnership goes to those in tertiary institutions, both students and staff to fill the openings in the Campus Magazine section. <br>
            </p>
            <p>
                We are an equal opportunistic organisation, and being an online publication, can work with anyone inrespective of location.<br>
                If you are interested, please fill out the following form to contact us. We will get back to you as soon as possible.
            </p>
            &nbsp;
            <div class="row">
                <div class="col-lg-5">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                    <?=
                    $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ])
                    ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
            <?php ActiveForm::end(); ?>
                </div>
            </div>
<?php endif; ?>
    </div>
    </div>
    &nbsp;
</div>