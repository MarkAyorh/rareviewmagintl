<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fillers */

$this->title = 'Update Fillers: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fillers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin: 0 auto">
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-view">
        <div class="fillers-update">

            <h1><?= Html::encode($this->title) ?></h1>

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
    &nbsp;
</div>
