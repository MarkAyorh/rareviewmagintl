<?php

namespace app\controllers;

use app\models\CampusPosts;
use yii\helpers\Html;

class CampusSearchController extends \yii\web\Controller {

    public function actionSearch($search) {
        
        $query = CampusPosts::find()->where(['like', 'title', $search])->all();
        
        $searched = trim((Html::encode($search)), " \t\n\r\0\x0B");
        
        return $this->render('search', ['query' => $query,
            'searched' => $searched]);
    }

}