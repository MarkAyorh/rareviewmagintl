<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampusCommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campus Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="padding: 20px" class="campus-comments-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'date',
                'time',
                'title:ntext',
                'name',
                // 'location',
                // 'email_address:email',
                // 'comment:ntext',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>

    </div>
</div>