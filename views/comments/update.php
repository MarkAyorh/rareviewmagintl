<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */


$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>

<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">

    <div style="padding-left: 2%; margin-right: 2%; width: 60%" class="comments-update">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    &nbsp;
    </div>

</div>
