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

<?php $this->title = 'Rareview Mag: Home Page'; ?>
<div style="background-color: #fff; height: 10px; width: 80%; margin-left: auto; margin-right: auto">
    &nbsp;
</div>
<div style="background-color: #fff; width: 80%; margin: 0 auto">    
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="width: 95%; margin: 0 auto;">
        <div>
            <?php
            echo Carousel::widget([
                'items' => [
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/cosmetrix/ATT_1478722616125_1.jpg">',
                        'caption' => 'Cosmetrix: Centre for plastic Surgery, Saudi German Hospital, Dubai at Beauty Africa Exhibition in Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/cosmetrix/ATT_1478722614561_2.jpg">',
                        'caption' => 'Cosmetrix: Centre for plastic Surgery, Saudi German Hospital, Dubai at Beauty Africa Exhibition in Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/sghd-at-medic-exhibition/ATT_1478722614823_3.jpg">',
                        'caption' => 'Saudi German Hospital Dubai at  Medic West Africa Exhibition Held Recently at Eko Convention Centre, Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/sghd-at-medic-exhibition/ATT_1478722615414_4.jpg">',
                        'caption' => 'Saudi German Hospital Dubai at  Medic West Africa Exhibition Held Recently at Eko Convention Centre, Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/sghd-at-medic-exhibition/ATT_1478722873218_5.jpg">',
                        'caption' => 'Saudi German Hospital Dubai at  Medic West Africa Exhibition Held Recently at Eko Convention Centre, Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/sghd-at-medic-exhibition/ATT_1478722873218_6.jpg">',
                        'caption' => 'Saudi German Hospital Dubai at  Medic West Africa Exhibition Held Recently at Eko Convention Centre, Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/sghd-at-medic-exhibition/ATT_1478722913818_7.jpg">',
                        'caption' => 'Saudi German Hospital Dubai at  Medic West Africa Exhibition Held Recently at Eko Convention Centre, Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/sghd-at-medic-exhibition/ATT_1478722945887_8.jpg">',
                        'caption' => 'Saudi German Hospital Dubai at  Medic West Africa Exhibition Held Recently at Eko Convention Centre, Lagos',
                    ],
                    [
                        'content' => '<img id="carouselImg" src="images/carousel/corpers-cleanup/corpers-doing-a-cleanup-exercise.jpg">',
                        'caption' => 'Corpers (NYSC) doing a Cleanup Exercise at Ogrute, Enugu-Ezike Enugu State, Nigeria. Standing left is the Corps Leader.',
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
    <div id="text"></div>
    <div style="background-color: #fff">
        <div style="width: 100%; margin-left: 2.5%; margin-right: 2.5%">
            <img  width="95%" height="5px" alt="horizontal" src="<?= Yii::$app->request->baseUrl ?>/images/dark.jpg">
        </div>
    </div>    

    <div class="leadStories">
        <span>
            Lead Stories
        </span>
    </div>
    <div class="postsWrapper">            
        <div class="postsInner1">
            <?php foreach ($left_div_post as $article): ?>
                <p style="color: #C00; font-size: 1.3em">
                    <?= ucfirst(Html::encode($article->category)) ?>
                </p>
                <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($article->id) ?>">                    
                    <img class="imgFramePost" alt="Picture" src="<?= Yii::$app->request->baseUrl ?>/images/articles/<?= Html::encode($article->picture) ?>.jpg"> 
                    <?php
                    if (!empty($article->caption)) {
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
                <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($article->id) ?>" style="color: #C00;">                            
                    <span id="readMore" class="glyphicon glyphicon-hand-right"></span>
                    <b id="readMore">
                        Read More 
                    </b>
                </a>
                <hr style="height:1px; border:none; background-color:#060" />

            <?php endforeach; ?>
        </div>
        <div class="postsInnerMiddle">

        </div>

        <div class="postsInner2">

            <?php foreach ($left_div_post2 as $article2): ?>
                <p style="color: #C00; font-size: 1.3em">
                    <?= ucfirst(Html::encode($article2->category)) ?>
                </p>

                <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($article2->id) ?>">                    
                    <img class="imgFramePost" alt="picture" src="<?= Yii::$app->request->baseUrl ?>/images/articles/<?= Html::encode($article2->picture) ?>.jpg">                        
                    <?php
                    if (!empty($article2->caption)) {
                        echo "<figcaption class='imgCaption'> $article2->caption </figcaption>";
                    }
                    ?>
                </a> 

                <p style="color: #C00">
                    <b>
                        <?= strtoupper(Html::encode($article2->title)) ?><br>
                    </b>
                </p>
                <?php
                $limit = implode(' ', array_slice(explode(' ', Html::encode($article2->post)), 0, 30));
                echo nl2br($limit);
                ?> ..........<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($article2->id) ?>" style="color: #C00">                            
                    <span id="readMore" class="glyphicon glyphicon-hand-right"></span>
                    <b id="readMore">
                        Read More 
                    </b>
                </a>
                <hr style="height:1px; border:none; background-color:#060" />

            <?php endforeach; ?>
        </div>


        <div class="postsInner3">
            <p id="quote">
                QUOTE: <br>
            <blockquote>
                <?= Html::encode($quote->quote) ?>
            </blockquote>
            </p>
            <p>
                &nbsp;
            </p>
            <span id="pastStories">
                Past Lead Stories<br>
            </span>

            <?php Pjax::begin(); ?>
            <div class="postsInner3Inner">
                <?php foreach ($right_div_post as $item): ?>
                    <a href="<?= Yii::$app->request->baseUrl ?>/home/read-more?read=<?= Html::encode($item->id) ?>">
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <?= strtoupper(Html::encode($item->title)) ?> <br>
                        <hr style="margin-top: 0.5em; margin-bottom: 0.5em;">
                    </a>
                <?php endforeach; ?>
            </div>
            <?php Pjax::end(); ?>

            <form style="margin-bottom: 2em; margin-top: 2em" action="<?= Yii::$app->request->baseUrl ?>/search-icon/search?search=$_GET['search']" role="search" method="get">

                <input type="text" class="input" type="search" name="search" placeholder="Search Past Stories">

                <button type="submit" class="button"><span class="glyphicon glyphicon-search"></span> </button>
            </form>
            <div style="margin: 10px">

            </div>
            <a href="<?= Yii::$app->request->baseUrl ?>/home/expand-fillers?fillers=<?= Html::encode($filler->id) ?>">
                <img class="imgFrameFillers" alt="picture" src="<?= Yii::$app->request->baseUrl ?>/images/fillers/<?= Html::encode($filler->filler_name) ?>.jpg"> 
            </a>
            <div style="text-align: center">
                <video width="100%" height="auto" controls>
                    <source src="<?= Yii::$app->request->baseUrl ?>/images/VID-20160826-WA0001.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>
    <div style="margin: 0 auto; border: 5px solid #7aba7b; width: 95%; background-color: #7aba7b">
        <div style=" text-align: center">
            <font class=" advert_col1_title">
            PROPERTY FOR SALE
            </font>
        </div> 
        <div style=" border-bottom: 5px solid #7aba7b">
            <img class=" imgFrameAdvert"  width="100%" height="50%" alt="property advert image" src="<?= Yii::$app->request->baseUrl ?>/images/adverts/rareviewprop.jpg">
        </div>

        <div class="advert_col1">
            <strong>SUITABLE FOR:</strong> Commercial. Industrial. Residential. Church complex<br>
            <strong>SITUATE:</strong> Along Agbara – Atan Rd, Ado-Odo/Ota Local Government Area, Ogun State<br>
            <strong>TITLE:</strong> C of O<br>
            <strong>SIZE:</strong> 6,981.159ms. About 12 plots.<br>
            <strong>FACILITIES:</strong> <br>
            &nbsp; &nbsp; 1)	A large factory building<br>
            &nbsp; &nbsp; 2)	One (1) storey administrative building<br>
            &nbsp; &nbsp; 3)	A two storey building with 5 No 3 bedroom flats for senior staff quarters<br>
            &nbsp; &nbsp; 4)	Mini  flats for junior staff<br>
            &nbsp; &nbsp; 5)	Row of shops with large parking space<br>
            &nbsp; &nbsp; 6)	Gate house<br>
            &nbsp; &nbsp; 7)	Private transformer<br>
            &nbsp; &nbsp; 8)	Underground fuel dump<br>
            &nbsp; &nbsp; 9)	Borehole<br>
            &nbsp; 10)	Well constructed drainage system<br>
            All the facilities are at least 90% completion
        </div>
        <div class="advert_col2">
            <p>
                <b>
                    Enquiries through:<br>
                </b>
                <text style="color: white">
                The Editor-In-Chief<br>
                Rareview International Magazine<br>
                +234-8184503534, +234-8035143738<br> 

            </p>
            <p><b>
                    OR<br>   
                </b>
            </p>        
            <address style="color: white">
            MECCCX PROPERTY<br>
            Suite 16, Dimak Plaza,<br>
            66/68, Egbeda-Idimu Rd,<br>
            Orelope B/Stop, Egbeda, Lagos<br>
            +234-8056633294, +234-7015952345
            </address>
        </div>            
    </div>
    <div id="categoriesWrapper">
        <div class="category" id="categories">
            <div id="categoriesWrapperTitle">
                <p>
                    <strong style=" color: #0097cf">
                        CATEGORIES  
                    </strong>
                </p>
            </div>
            <?php foreach ($categories as $item): ?>
                <a href="<?= Yii::$app->request->baseUrl ?>/home/open-categories?open=<?= Html::encode($item->category) ?>" style="color: #fff">
                    <?= ucfirst(Html::encode($item->category)) ?> <br>
                    <hr style="margin-top: 0.2em; margin-bottom: 0.2em;">
                </a>
            <?php endforeach; ?>  

            <!--
            <a href="<?= Yii::$app->request->baseUrl ?>/home/events-and-places" style="color: #fff">
                Events and Places<br>
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em;">
            </a> 
            -->
        </div>
        <div class="category" id="categories">
            <div id="categoriesWrapperTitle">
                <p>
                    <strong style=" color: #0097cf">
                        OTHER SERVICES
                    </strong>
                </p>
            </div>
            <a href="<?= Yii::$app->homeUrl . 'services/other-services' ?>" style="color: #fff;">
                Media Agency<br>
                &nbsp;-Advert Placement<br>        
                &nbsp;-Media Arrangement<br>
            </a>
            <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
            <a href="<?= Yii::$app->homeUrl . 'services/graphic-design-and-printing' ?>" style="color: #fff;">
                Graphic Design and Printing<br>        
                &nbsp;-Corporate Newsletters<br>        
                &nbsp;-Special Journal/ <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Publication<br>        
                &nbsp;&nbsp;-Magazine Publication
            </a>
            <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
            <a href="<?= Yii::$app->homeUrl . 'services/advert-production' ?>" style="color: #fff;">
                Advert Production<br>
                &nbsp;-TV<br>
                &nbsp;-Radio
            </a>
            <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
            <a href="<?= Yii::$app->homeUrl . 'services/public-relations' ?>" style="color: #fff;">
                Public Relations<br>
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em;">
            </a>
        </div>
        <div class="category" id="categories">
            <div id="categoriesWrapperTitle">
                <p>
                    <strong style=" color: #0097cf">
                        RELATIONSHIPS
                    </strong>
                </p>
            </div>
            <a href="<?= Yii::$app->homeUrl . 'relationship/contact' ?>" style="color: #fff;">
                Employment, Partnership <br>
                or Collaboration. Click here.
            </a>
            <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
        </div>
        <div class="category" id="categories">
            <div id="categoriesWrapperTitle">
                <p>
                    <strong style=" color: #0097cf">
                        CAMPUS MAGAZINE 
                    </strong>
                </p>
            </div>
            <a href="<?= Yii::$app->homeUrl . 'campus/campus-magazine' ?>" style="color: #fff;">
                What's Up?
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
                Gist Me  
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
                Events and Trends        
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
                Academic Issues        
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
                Campus Interviews        
            </a>
            <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
        </div>
        <div class="category" id="categories">
            <div id="categoriesWrapperTitle">
                <p>
                    <strong style=" color: #0097cf">
                        ARCHIVE 
                    </strong>
                </p> 
            </div>
            <?php foreach ($archive_dates as $item): ?>
                <a href="<?= Yii::$app->request->baseUrl ?>/home/open-archive?open=<?= Html::encode($item->period) ?>" style="color: #fff">
                    <?= Html::encode($item->period) ?><br>
                </a>
                <hr style="margin-top: 0.2em; margin-bottom: 0.2em">
            <?php endforeach; ?>
            <?php //echo LinkPager::widget(['pagination' => $pagination_archive])  ?>
        </div>
    </div>
</div>




