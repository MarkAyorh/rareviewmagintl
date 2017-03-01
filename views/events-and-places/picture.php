<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
?>
<?php
$this->title = 'Events and Places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventsAndPlaces">
    <div style="text-align: center">
        <a href="javascript:javascript:history.go(-1)"><< Go back to choose another Event</a>

    </div>
    
    <div style="text-align: center" class="eventsAndPlacesDiv1">
        <strong style="color: #C00">            
            PICTURES GALLERY: <?= strtoupper(Html::encode($show_title)) ?>            
        </strong>
        
    </div>    
    
    <?php Pjax::begin(); ?>
    <div class="eventsAndPlacesDiv3"> 
        <?php foreach ($all_pictures as $picture): ?>
        <table>
            <caption align="bottom"><?= ucfirst(Html::encode($picture->caption)) ?></caption>
            <tr>
                <td>
                    <img style="width: 100%; height: 25em" class="imgframe" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>
             /images/events-and-places/<?= Html::encode($picture->picture_name) ?>.jpg">
                </td>
            </tr>
        </table>
        <?php endforeach; ?> 
</div>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
    <?php Pjax::end(); ?>
</div>



