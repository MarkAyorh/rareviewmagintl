<?php

namespace app\controllers;

use app\models\Posts;
use yii\helpers\Html;

class SearchIconController extends \yii\web\Controller {

    public function actionSearch($search) {
        
        $query = Posts::find()->where(['like', 'title', $search])->all();
        
        $searched = trim((Html::encode($search)), " \t\n\r\0\x0B");
        
        return $this->render('search', ['query' => $query,
            'searched' => $searched]);
    }

}
