<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fillers */

$this->title = 'Create Fillers';
$this->params['breadcrumbs'][] = ['label' => 'Fillers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin: 0 auto">
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

        </div
    </div>
    &nbsp;
</div>
