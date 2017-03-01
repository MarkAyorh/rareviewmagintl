<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CampusComments */

$this->title = 'Update Campus Comments: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Campus Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="campus-comments-update">

        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>