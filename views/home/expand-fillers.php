<?php
use yii\helpers\Html;

$this->title = 'Filler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index" style="background-color: #fff; min-height: 220px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="width: 90%; padding-left: 20%; padding-right: 10%; padding-bottom: 5%">
        <img style="width: 100%" alt="Filler" src="<?= Yii::$app->request->baseUrl ?>/images/fillers/<?= Html::encode($expand_filler->filler_name)?>.jpg">
    </div>
</div>

