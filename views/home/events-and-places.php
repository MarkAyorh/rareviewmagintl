<?php

use yii\helpers\Html;
?>
<?php
$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
    
 <div div style="background-color: #fff; min-height: 300px; width: 80%; margin-left: auto; margin-right: auto">     
     <div class=" eventsAndPlacesDiv3">   
         <?php foreach ($all_events_unique as $event): ?>          
             <table> 
                 <tr>
                         <td style="font-size: 1em; color: #C00; height: 50%;">
                             <a href="<?= Yii::$app->request->baseUrl ?>/events-and-places/picture?show=<?= Html::encode($event->title) ?>" style="color: #C00">
                                 <img style="height: 6em; width: 6em" class="imgframe" alt="Picture" 
                                      src="<?= Yii::$app->request->baseUrl ?>/images/events-and-places/<?= Html::encode($event->picture_name) ?>.jpg">
                             </a>                 
                         </td>
                         <td style="font-size: 1em; color: #C00; height: 50%; vertical-align: central; padding: 0.3em">
                             <a href="<?= Yii::$app->request->baseUrl ?>/events-and-places/picture?show=<?= Html::encode($event->title) ?>" style="color: #C00">                    
                                 <?= Html::encode($event->title) ?>
                             </a>                                     
                         </td>
                     </tr> 
                     <tr>
                         <td colspan="2">
                             <hr style="margin-top: 1.5em; margin-bottom: 1.5em; color: #000;">
                         </td>
                     </tr>
                     </tr>
                 </table>
    <?php endforeach; ?>

     </div>
 </div>