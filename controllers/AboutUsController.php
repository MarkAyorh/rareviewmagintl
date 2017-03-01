<?php

namespace app\controllers;

class AboutUsController extends \yii\web\Controller
{
    public function actionAbout()
    {
        return $this->render('about');
    }

}
