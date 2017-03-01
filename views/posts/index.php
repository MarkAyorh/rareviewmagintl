<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="javascript:javascript:history.go(-1)"><< Go back to choose another Activity</a>
    </div>
    <div style="padding-left: 2%; padding-right: 2%" class="posts-index">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Click to Create New Homepage Posts', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
               // ['class' => 'yii\grid\SerialColumn'],
                'id',
                'date',
                'category',
                'title:ntext',
                'picture',
                'caption',
                //'post:ntext',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
        
            &nbsp;
        

    </div>
</div>