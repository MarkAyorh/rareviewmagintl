<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventsAndPlacesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events And Places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/posts/admin-to-do"><< Go back to choose another Activity</a>
    </div>
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-index">


        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Events And Places', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'title:ntext',
                'picture_name',
                'short_note:ntext',
                'caption:ntext',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
        &nbsp;
    </div>
</div>
