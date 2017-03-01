<?php

namespace app\controllers;

use Yii;
use app\models\EventsAndPlaces;
use app\models\EventsAndPlacesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\data\Pagination;

/**
 * EventsAndPlacesController implements the CRUD actions for EventsAndPlaces model.
 */
class EventsAndPlacesController extends \yii\web\Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'update', 'create'],
                'rules' => [
                    [
                        'actions' => ['index', 'update', 'create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all EventsAndPlaces models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new EventsAndPlacesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EventsAndPlaces model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EventsAndPlaces model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new EventsAndPlaces();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $exists = \app\models\EventUnique::find()->where(['title' => $model->title])
                    ->exists();
            if ($exists == 1) {
                
            } else {
                Yii::$app->db->createCommand()
                        ->insert('event_unique', ['title' => $model->title, 'picture_name' => $model->picture_name])
                        ->execute();
            }return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EventsAndPlaces model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EventsAndPlaces model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EventsAndPlaces model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return EventsAndPlaces the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = EventsAndPlaces::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /*
     * Upload pictures for Events and Places
     */

    public function actionEventPictureUpload() {
        $model = new \app\models\UploadForm;

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->validate()) {
                //$file_made = mkdir('images/ayo', 0777);
                $model->file->saveAs('images/events-and-places/' . $model->file->baseName . '.' . $model->file->extension);
            }
            return $this->render('picture-upload-confirmed');
        }
        return $this->render('upload-picture', ['model' => $model]);
    }

    public function actionPicture($show) {

        $all_pictures = EventsAndPlaces::find()->where(['title' => $show])->all();
        $show_short_note = EventsAndPlaces::find()->where(['title' => $show])->one();
        
        $pagination = new Pagination([
            'defaultPageSize' => 30,
            'totalCount' => EventsAndPlaces::find()->count(),
        ]);


        $all_pictures = EventsAndPlaces::find()->orderBy('id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

        return $this->render('picture', [
                    'show_title' => $show,
                    'show_short_note' => $show_short_note,
                    'all_pictures' => $all_pictures,
                    'pagination' => $pagination,
        ]);
    }

}
