<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CampusComments */

$this->title = 'Create Campus Comments';
$this->params['breadcrumbs'][] = ['label' => 'Campus Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="campus-comments-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</div>