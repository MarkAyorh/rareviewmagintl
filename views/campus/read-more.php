<?php

use yii\helpers\Html;
?>
<?php
$this->title = 'Read More';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background-color: #fff; min-height: 200px; width: 80%; margin-left: auto; margin-right: auto">
    <div style="text-align: center">
        <a href="javascript:javascript:history.go(-1)"><< Go back to choose another Article</a>

    </div>
    <div style="margin-bottom: 3px; padding-top: 1em; padding-left: 2em; padding-bottom: 2em ">
        <strong style="color: #C00">
            <h3>
            <?= ucfirst(Html::encode($read_more->category)) ?>: <br>
            </h3>
            <?= strtoupper(Html::encode($read_more->title)) ?>
            <button class="btn btn-primary" type="button">
                Comments <span class="badge"><?= Html::encode($comments_count)?></span>
            </button>
        </strong>
    </div>
    <div style="width: 40%; height: 40%; padding-left: 5%">
        <img class="imgframe" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/images/campus/<?= Html::encode($read_more->picture) ?>.jpg">
    </div>
    <div class="onecolumns">  
        <p>
            &nbsp;
        </p>
<?= nl2br(Html::encode($read_more->post)) ?>

    </div>
    <div class="readmoreButtons">
        <a style="color: #fff" href="<?= Yii::$app->request->baseUrl ?>/campus/download?read=<?= Html::encode($read_more->id) ?>">
            <button class="btn btn-primary" type="button">
                Download this Page <span class="glyphicon glyphicon-download"></span> 
            </button>
        </a>
               
        <p>
            
        </p>
        <a href="<?= Yii::$app->request->baseUrl ?>/campus/comment-form?open=<?= Html::encode($read_more->title) ?>">
            <button class="btn btn-primary" type="button" style="color: #fff; background-color: #060; width: 170px">
                Post a Comment <span class="glyphicon glyphicon-envelope"></span>  
            </button>
        </a>  
        
    </div>

    <div class="fontsize-sm-comments" style="padding-left: 3%; color: green; width: 70%">        
        <strong>
            People's Comments on the topic:<br>
        </strong>      
        &nbsp; &nbsp; &nbsp; &nbsp;<br>
        <?php
        if (Html::encode($comments_count) == 0) {
            echo '(<strong> There is no comment yet </strong>)';
        }
        ?>
        <?php foreach ($comments as $comment): ?>        
            <span class="glyphicon glyphicon-user"></span>
            <?= Html::encode($comment->name) ?> <i>......from <?= Html::encode($comment->location) ?> &nbsp; &nbsp;<?= Html::encode($comment->date) ?> &nbsp; &nbsp;<?= Html::encode($comment->time) ?></i><br>
            
            <div style="padding-left: 5%">
    <?= Html::encode($comment->comment) ?><br>
            </div>  
            <img  width="100%" height="1px" alt="horizontal" src="<?= Yii::$app->request->baseUrl ?>/images/dark.jpg">
<?php endforeach; ?>

    </div>

</div>



