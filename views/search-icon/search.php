<?php

use yii\helpers\Html;
?>
<?php
$this->title = 'Search';
$this->params['breadcrumbs'][] = $this->title;
?>



<div div style="background-color: #fff; min-height: 300px; width: 80%; margin-left: auto; margin-right: auto">
    <h3 style="padding-left: 2%; margin-bottom: 3%">
        Searching Past Stories for: <span style="color: #C00"><i><?= $searched ?></i></span> completed.
    </h3>
    <div class="onecolumns"> 

        <?php
        foreach ($query as $item):
            ?>
            <div class="searchTable"> 

                <div class="searchTableDetail1">
                    <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($item->id) ?>">
                        <img style="height: 6em; width: 6em" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/images/articles/<?= Html::encode($item->picture) ?>.jpg">        
                    </a>                 
                </div>

                <div class="searchTableDetail2">
                    <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($item->id) ?>" style="color: #C00">                    
                        <?= strtoupper(Html::encode($item->title)) ?> <br><font style="color: #000; size: 0.5em"><i><?= Html::encode($item->date) ?></i>
                    </a>                                     
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>