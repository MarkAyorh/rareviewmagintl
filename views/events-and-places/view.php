<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventsAndPlaces */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Events And Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="javascript:javascript:history.go(-1)"><< Go back to upload another picture of same event</a>
    </div>    
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>

        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title:ntext',
                'picture_name',
                'short_note:ntext',
                'caption:ntext',
            ],
        ])
        ?>
    </div>
</div>
