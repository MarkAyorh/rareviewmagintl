<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FillersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fillers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin: 0 auto">
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-view">
        <div style="text-align: center">
            <a href="javascript:javascript:history.go(-1)"><< Go back to choose another Activity</a>
        </div>
        <div class="fillers-index">

            <h1><?= Html::encode($this->title) ?></h1>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('Create Fillers', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'filler_name',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
    &nbsp;
</div>
