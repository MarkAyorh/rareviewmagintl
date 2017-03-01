<?php

namespace app\controllers;

use yii;
use app\models\Posts;
use app\models\Categories;
use yii\data\Pagination;
use app\models\Quotes;
use app\models\Archive;
use app\models\Comments;
use app\models\EventsAndPlaces;
use app\models\EventUnique;
use kartik\mpdf\Pdf;
use app\models\Fillers;

class HomeController extends \yii\web\Controller {

    public function actionIndex() {
        $query = Posts::find();
        $archive = Archive::find();
        $events = EventsAndPlaces::find();
        $filler_count = Fillers::find()->count();
        $filler = Fillers::find()->where(['id' => $filler_count])->one();

        $quotes = Quotes::find();
        $quotes_count = $quotes->count();
        $quote = $quotes->where(['id' => $quotes_count])->one();

        $all_posts = $query->count();
        $post_limit = 14;
        $post = $query->limit($post_limit)->orderBy(['id' => SORT_DESC])->all();

        $post2 = $query->limit($post_limit)->offset($post_limit)->orderBy(['id' => SORT_DESC])->all();
        ;

        /*
          $pagination = new Pagination([
          'defaultPageSize' => 20,
          'totalCount' => $query->count(),
          ]);

          $pagination_archive = new Pagination([
          'defaultPageSize' => 6,
          'totalCount' => $archive->count(),
          ]);

          $archives = $archive->orderBy('id')
          ->offset($pagination_archive->offset)
          ->limit($pagination_archive->limit)
          ->all();

          $posts = $query->orderBy('id')
          ->offset($pagination->offset)
          ->limit($pagination->limit)
          ->all();
         

        Yii::$app->db->createCommand()->truncateTable("past_lead_stories")->execute();
        $past_stories = new \app\models\PastLeadStories();
         * 
         */
        $rand = rand(1, $all_posts - 2 * $post_limit);         

        $posts = Posts::find()->limit(28)->offset($rand)->orderBy(['id' => SORT_ASC])->all();
        
        $categories = Categories::find()->orderBy(['id' => SORT_ASC])->all();
        $unique_categories = \app\models\UniqueCategories::find()->orderBy(['id'=>SORT_ASC])->all();
        $archive_dates = $archive->orderBy('id')->all();
        $events_and_places = $events->orderBy('id')->all();

        return $this->render('index', [
                    'left_div_post' => $post,
                    'left_div_post2' => $post2,
                    'right_div_post' => $posts,
                    //'pagination' => $pagination,
                    //'pagination_archive' => $pagination_archive,
                    'categories' => $categories,
                    'unique_categories' => $unique_categories,
                    'quote' => $quote,
                    'archive_dates' => $archive_dates,
                    'events_and_places' => $events_and_places,
                    //'archives' => $archives,
                    'filler' => $filler,
        ]);
    }

    public function actionReadMore($read) {

        $query = Posts::find();
        $all_posts = $query->count();
        
        //getting the category of $read which is a post id
        $get_title = Posts::find()->where(['id' => $read])->one();        
                
        $unique_categories_all = \app\models\UniqueCategories::find()->all();
        $unique_categories_object = array();
        
        foreach ($unique_categories_all as $category){
            array_push($unique_categories_object, $category->category);
        }
        
        $unique_categories = array_map('strval', $unique_categories_object);
        
        $read_more = Posts::find()->where(['id' => $read])->one();

        $comments = Comments::find()->where(['title' => $read_more->title])->all();
        $comments_count = Comments::find()->where(['title' => $read_more->title])->count();

        return $this->render('read-more', [
                    'read_more' => $read_more,
                    'comments' => $comments,
                    'comments_count' => $comments_count,
                    'unique_categories' => $unique_categories,
        ]);
    }

    public function actionOpenCategories($open) {        
        $open_categories = Posts::find()->where(['category' => $open])->all();

        return $this->render('open-categories', [
                    'open_categories' => $open_categories,
                    'open_title' => $open,
        ]);
    } 
    
    public function actionOpenUniqueCategories($open) {        
        $open_unique_categories = Posts::find()->where(['category' => $open])->all();
        $page_title = $open;
        
        return $this->render('open-unique-categories', [
                    'open_unique_categories' => $open_unique_categories,
                    'page_title' => $open,
        ]);
    }     

    public function actionOpenArchive($open) {
        $query = Posts::find();
        $open_archive = $query->where(['date' => $open])->all();

        return $this->render('open-archive', [
                    'open_archive' => $open_archive,
                    'open_title' => $open,
        ]);
    }

    public function actionCommentForm($open) {

        $model = new Comments();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->db->createCommand()
                    ->insert('comments', ['id' => NULL, 'date' => $model->date, 'time' => $model->time,
                        'title' => $model->title, 'name' => $model->name, 'location' => $model->location,
                        'email_address' => $model->email_address, 'comment' => $model->comment])
                    ->execute();
            return $this->render('comment-confirm');
        } else {
            return $this->render('form', [
                        'model' => $model,
                        'open_title' => $open]);
        }
    }

   
    public function actionDownload($read) {
        // get your HTML raw content without any layouts or scripts
        $query = Posts::find();
        $all_posts = $query->count();

        $read_more = $query->where(['id' => $read])->one();

        $comments = Comments::find()->where(['title' => $read_more->title])->all();
        $comments_count = Comments::find()->where(['title' => $read_more->title])->count();

        $content = $this->renderPartial('read-more', [
            'read_more' => $read_more,
            'comments' => $comments,
            'comments_count' => $comments_count,
        ]);


        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_DOWNLOAD,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => $read_more->title],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader' => ['Rareviewmagintl'],
                'SetFooter' => ['{PAGENO}'],
            ]
        ]);



        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    public function actionExpandFillers($fillers) {
        $query = \app\models\Fillers::find();
        $expand_filler = $query->where(['id' => $fillers])->one();

        return $this->render('expand-fillers', [
                    'expand_filler' => $expand_filler,
        ]);
    }

}
