<?php

namespace app\controllers;
use app\models\RelationshipForm;
use yii;

class RelationshipController extends \yii\web\Controller
{
    public function actionContact()
    {
        $model = new RelationshipForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

}
