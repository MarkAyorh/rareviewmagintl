<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventsAndPlaces */

$this->title = 'Update Events And Places';
$this->params['breadcrumbs'][] = ['label' => 'Events And Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/posts/admin-to-do"><< Go back to choose another Activity</a>
    </div>
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-update">


        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>
        &nbsp;
    </div>
</div>
