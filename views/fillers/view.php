<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fillers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fillers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin: 0 auto">
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-view">
        <div class="fillers-view">

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
                    'filler_name',
                ],
            ])
            ?>

        </div>
    </div>
    &nbsp;
</div>
