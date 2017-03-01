<?php
namespace app\controllers;

use yii;
use app\models\CampusPosts;
use app\models\Categories;
use yii\data\Pagination;
use app\models\Quotes;
use app\models\Archive;
use app\models\CampusComments;
use app\models\EventsAndPlaces;
use app\models\EventUnique;
use kartik\mpdf\Pdf;
use app\models\Fillers;

class CampusController extends \yii\web\Controller
{
    public function actionCampusMagazine()
    {
        $query = CampusPosts::find();
        $archive = Archive::find();        
        $events = EventsAndPlaces::find();
        $filler_count = Fillers::find()->count();
        $filler = Fillers::find()->where(['id' => $filler_count])->one();

        $quotes = Quotes::find();
        $quotes_count = $quotes->count();
        $quote = $quotes->where(['id' => $quotes_count])->one();

        $all_posts = $query->count();
        $post = CampusPosts::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        
        $post2 = CampusPosts::find()->limit(3)->offset(3)->orderBy(['id' => SORT_DESC])->all();;

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        /*
        $pagination_archive = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $archive->count(),
        ]);
        
        $archives = $archive->orderBy('id')
                ->offset($pagination_archive->offset)
                ->limit($pagination_archive->limit)
                ->all();
        */
        $posts = $query->orderBy('id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

        $query_categories = Categories::find();
        $categories = $query_categories->orderBy('id')->all();
        $archive_dates = $archive->orderBy('id')->all();
        $events_and_places = $events->orderBy('id')->all();

        return $this->render('campus-mag', [
                    'left_div_post' => $post,
                    'left_div_post2' => $post2,
                    'right_div_post' => $posts,
                    'pagination' => $pagination,
                    //'pagination_archive' => $pagination_archive,
                    'categories' => $categories,
                    'quote' => $quote,
                    'archive_dates' => $archive_dates, 
                    'events_and_places' => $events_and_places,
                    //'archives' => $archives,
                    'filler' => $filler,
                    
        ]);
    }
    
    public function actionCommentForm($open) {

        $model = new CampusComments();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->db->createCommand()
                    ->insert('campus_comments', ['id' => NULL, 'date' => $model->date, 'time' => $model->time,
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
    
    public function actionReadMore($read) {

        $query = CampusPosts::find();
        $all_posts = $query->count();

        $read_more = $query->where(['id' => $read])->one();

        $comments = CampusComments::find()->where(['title' => $read_more->title])->all();
        $comments_count = CampusComments::find()->where(['title' => $read_more->title])->count();

        return $this->render('read-more', [
                    'read_more' => $read_more,
                    'comments' => $comments,
                    'comments_count' => $comments_count,
        ]);
    }
    
    public function actionDownload($read) {
        // get your HTML raw content without any layouts or scripts
        $query = CampusPosts::find();
        $all_posts = $query->count();

        $read_more = $query->where(['id' => $read])->one();

        $comments = CampusComments::find()->where(['title' => $read_more->title])->all();
        $comments_count = CampusComments::find()->where(['title' => $read_more->title])->count();
        
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

}
