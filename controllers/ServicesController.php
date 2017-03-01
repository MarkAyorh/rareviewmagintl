<?php

namespace app\controllers;

class ServicesController extends \yii\web\Controller
{
    public function actionMediaAgency()
    {
        return $this->render('media-agency');
    }
    
    public function actionGraphicDesignAndPrinting()
    {
        return $this->render('graphic-design-and-printing');
    }
    
    public function actionAdvertProduction()
    {
        return $this->render('advert-production');
    }
    
    public function actionPublicRelations()
    {
        return $this->render('public-relations');
    }
    
    public function actionOtherServices()
    {
        return $this->render('other-services');
    }

}
