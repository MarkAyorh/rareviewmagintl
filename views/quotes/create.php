<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Quotes */

$this->title = 'Create Quotes';
$this->params['breadcrumbs'][] = ['label' => 'Quotes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">    
    <div style="text-align: center">
        <a href="<?= Yii::$app->request->baseUrl ?>/posts/admin-to-do"><< Go back to choose another Activity</a>
    </div>
    <div style="padding-left: 2%; margin-right: 2%" class="events-and-places-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
    &nbsp;
</div>
