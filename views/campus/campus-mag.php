<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Carousel;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
?>

<div style="background-color: #fff; height: 10px; width: 80%; margin-left: auto; margin-right: auto">
    &nbsp;
</div>
<div style="background-color: #fff; width: 80%; margin: 0 auto">
    <div style="background-color: #fff">
        <div id="ContentMiddle">
            &nbsp;
        </div>
        <div class="leadStories">
            <span>
                Campus Jists
            </span>
        </div>

        <div class="postsWrapper">            
            <div class="postsInner1">
                <?php foreach ($left_div_post as $article): ?>
                    <p style="color: #C00; font-size: 1.3em">
                        <?= ucfirst(Html::encode($article->category)) ?>
                    </p>
                    <a href="<?= Yii::$app->request->baseUrl ?>/campus/read-more?read=<?= Html::encode($article->id) ?>">                    
                        <img class="imgFramePost" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/images/campus/<?= Html::encode($article->picture) ?>.jpg"> 
                        <?php if(!empty($article->caption)){
                        echo "<figcaption class='imgCaption'> $article->caption </figcaption>";
                    }                    
                    ?>
                        
                    </a> 
                    <p style="color: #C00">
                        <b>

                            <?= strtoupper(Html::encode($article->title)) ?><br>
                        </b>
                    </p>

                    <?php
                    $limit = implode(' ', array_slice(explode(' ', Html::encode($article->post)), 0, 30));
                    echo nl2br($limit);
                    ?> .....<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="<?= Yii::$app->request->baseUrl ?>/campus/read-more?read=<?= Html::encode($article->id) ?>" style="color: #C00;">                            
                        <span id="readMore" class="glyphicon glyphicon-hand-right"></span>
                        <b id="readMore">
                            Read More 
                        </b>
                    </a>
                    <hr style="margin-top: 1em; margin-bottom: 1em;">

                <?php endforeach; ?>
            </div>
            <div class="postsInnerMiddle">
                
            </div>

            <div class="postsInner2">

                <?php foreach ($left_div_post2 as $article2): ?>
                    <p style="color: #C00; font-size: 1.3em">
                        <?= ucfirst(Html::encode($article2->category)) ?>
                    </p>

                    <a href="<?= Yii::$app->request->baseUrl ?>/campus/read-more?read=<?= Html::encode($article2->id) ?>">                    
                        <img class="imgFramePost" alt="picture" src="<?= Yii::$app->request->baseUrl ?>/images/campus/<?= Html::encode($article2->picture) ?>.jpg"> 
                    </a> 

                    <p style="color: #C00">
                        <b>
                            <?= strtoupper(Html::encode($article2->title)) ?><br>
                        </b>
                    </p>
                    <?php
                    $limit = implode(' ', array_slice(explode(' ', Html::encode($article2->post)), 0, 30));
                    echo $limit;
                    ?> ..........<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($article2->id) ?>" style="color: #C00">                            
                        <span id="readMore" class="glyphicon glyphicon-hand-right"></span>
                        <b id="readMore">
                            Read More 
                        </b>
                    </a>
                    <hr style="margin-top: 1em; margin-bottom: 1em;">

                <?php endforeach; ?>
            </div>


            <div class="postsInner3">
                <p id="quote">
                    QUOTE: <br>
                    <?= Html::encode($quote->quote) ?>
                </p>
                <p>
                    &nbsp;
                </p>
                <span id="pastStories">
                    Past Campus Jists<br>
                </span>
                
                <?php Pjax::begin(); ?>
                <div class="postsInner3Inner">
                <?php foreach ($right_div_post as $item): ?>
                    <a href="<?= Yii::$app->request->baseUrl ?>/campus/read-more?read=<?= Html::encode($item->id) ?>">
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <?= strtoupper(Html::encode($item->title)) ?> <br>
                        <hr style="margin-top: 0.5em; margin-bottom: 0.5em;">
                    </a>
                <?php endforeach; ?>
                </div>
                <?= LinkPager::widget(['pagination' => $pagination]) ?>
                <?php Pjax::end(); ?>

                <form style="margin-bottom: 2em; margin-top: 2em" action="<?= Yii::$app->request->baseUrl ?>/campus-search/search?search=$_GET['search']" role="search" method="get">

                    <input type="text" class="input" type="search" name="search" placeholder="Search Past Jists">

                    <button type="submit" class="button"><span class="glyphicon glyphicon-search"></span> </button>
                </form>
                <a href="<?= Yii::$app->request->baseUrl ?>/home/expand-fillers?fillers=<?= Html::encode($filler->id) ?>">
                    <img class="imgFrameFillers" alt="picture" src="<?= Yii::$app->request->baseUrl ?>/images/fillers/<?= Html::encode($filler->filler_name)?>.jpg"> 
                </a>
            </div>

        </div>         
        
    </div>
    
</div>





