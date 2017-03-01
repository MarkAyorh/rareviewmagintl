<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use raoul2000\widget\scrollup\Scrollup;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Rareview Magazine, Campus Magazine, Online Magazine">
        <meta name="description" content="Rareview Magazine International is a Nigerian Company. Formed in 2016 as an on-line Magazine with occasional offline edition as need arises. Though the base of the magazine is in Nigeria, we seek to provide an online platform for regional and cross country
              discussions and information exchange while entertaining readers. The orientation is therefore, general enlightenment. We want to
              affect positively, individual and collective consciousness.">
        <meta name="robots" content="index, follow">
        <?= Html::csrfMetaTags() ?>
        <?php $this->title = 'Rareview Magazine International'; ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body style="background-color: #2b81af">
        <?php $this->beginBody() ?>
        <div>
            <table style="background-color: #FFF; width: 80%; margin: 0 auto">
                <tr>
                    <td class="rareviewmag">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/rareviewimage4.png" width="100%" height="auto" alt="rareview logo">
                    </td>
                    <td style="text-align: center" >
                        <a href="https://www.facebook.com/rareviewmagintl">                            
                            <img class="social" src="<?= Yii::$app->request->baseUrl ?>/images/social-media/facebook.png" alt="Facebook logo">
                        </a>
                        <a href="#">
                            <img class="social" src="<?= Yii::$app->request->baseUrl ?>/images/social-media/linkedin.png" alt="LinkedIn logo">
                        </a>
                        <a href="#">
                            <img class="social" src="<?= Yii::$app->request->baseUrl ?>/images/social-media/twitter.png"  alt="Twitter logo">
                        </a>
                    </td>
                </tr>
            </table>

            <div style=" width: 100%; margin: 0 auto;">
                <div style="width: 80%; margin: 0 auto">
                    <?php
                    NavBar::begin([
                        'brandLabel' => 'Home',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-inverse',
                        ],
                    ]);
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-left'],
                        'items' => [
                            [ 'label' => 'About Us', 'url' => Yii::$app->homeUrl . 'about-us/about'],
                            [ 'label' => 'Services',
                                //'items' => [
                                //   ['label' => 'Media Agency', 'url' => Yii::$app->homeUrl . 'services/media-agency'],
                                //    '<li class="divider"></li>',
                                //    ['label' => 'Graphic Design and Printing', 'url' => Yii::$app->homeUrl . 'services/graphic-design-and-printing'],
                                //    '<li class="divider"></li>',
                                //    ['label' => 'Advert Production', 'url' => Yii::$app->homeUrl . 'services/advert-production'],
                                //   '<li class="divider"></li>',
                                //   ['label' => 'Public Relations', 'url' => Yii::$app->homeUrl . 'services/public-relations'],
                                'url' => Yii::$app->homeUrl . 'services/other-services',],
                            [ 'label' => 'Advert Rate', 'url' => Yii::$app->homeUrl . 'advert-rate/',],
                            //[ 'label' => 'GoldPosts', 'url' => Yii::$app->homeUrl . 'goldposts/',],
                            [ 'label' => 'Relationships', 'url' => Yii::$app->homeUrl . 'relationship/contact',],
                            [ 'label' => 'Campus Magazine', 'url' => Yii::$app->homeUrl . 'campus/campus-magazine',],
                            [ 'label' => 'Contact Us', 'url' => Yii::$app->homeUrl . 'site/contact',],
                            Yii::$app->user->isGuest ?
                                    ['label' => 'Login', 'url' => ['/site/login']] :
                                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                        ],
                    ]);
                    NavBar::end();
                    ?>
                </div>
                <div style="background-color: #fff; width: 80%; margin: 0 auto">
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>

                </div>
                <?= $content ?>
            </div>


            <?php
            Scrollup::widget([
                'theme' => Scrollup::THEME_IMAGE,
                'pluginOptions' => [
                    'scrollText' => "To top", // Text for element
                    'scrollName' => 'scrollUp', // Element ID
                    'topDistance' => 400, // Distance from top before showing element (px)
                    'topSpeed' => 3000, // Speed back to top (ms)
                    'animation' => Scrollup::ANIMATION_SLIDE, // Fade, slide, none
                    'animationInSpeed' => 200, // Animation in speed (ms)
                    'animationOutSpeed' => 200, // Animation out speed (ms)
                    'activeOverlay' => false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
                ]
            ]);
            ?>
            <div id="footer" style=" color: #FFF; line-height: 40px; margin: 0 auto; width: 80%; background-color: #000000; text-align: center; height: 40px;">
                &copy; <?= date('Y') ?> RareView Magazine International. All Rights Reserved.   
            </div>   

        </div>

        <?php $this->endBody() ?>

    </body>

</html>
<?php $this->endPage() ?>
