<?php

use yii\helpers\Html;
?>
<?php
$this->title = 'Unique Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
    
<div style="background-color: #fff; min-height: 300px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="openCategoriesTitles">        
        <?= Html::encode($page_title) ?>                 
     </div>
     <div class="openCategoriesColumns">   
         <?php foreach ($open_unique_categories as $item): ?> 
             <table> 
                 <tr>
                         <td style="font-size: 1em; color: #C00; height: 50%;">
                             <a href="<?= Yii::$app->request->baseUrl ?>/events-and-places/picture?show=<?= Html::encode($item->title) ?>" style="color: #C00">
                                 <img style="height: 6em; width: 6em" class="imgframe" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/images/articles/<?= Html::encode($item->picture) ?>.jpg">        
                             </a>                 
                         </td>
                         <td style="font-size: 1em; color: #C00; height: 50%; vertical-align: central; padding: 0.3em">
                             <a href="<?= Yii::$app->request->baseUrl ?>/events-and-places/picture?show=<?= Html::encode($item->title) ?>" style="color: #C00">                    
                                 <?= strtoupper(Html::encode($item->title)) ?>
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