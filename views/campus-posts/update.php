<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CampusPosts */

$this->title = 'Update Campus Posts: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Campus Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-view">
        <div style="text-align: center">
            <a href="<?= Yii::$app->request->baseUrl ?>/posts/admin-to-do"><< Go back to choose another Activity</a>
        </div>
        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>
        &nbsp;
    </div>
</div>
