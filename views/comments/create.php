<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = 'Create Comments';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="padding-left: 2%; width: 60%" class="oomments-create">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    &nbsp;
    </div>

</div>
