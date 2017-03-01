<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;
use app\models\Posts;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'posts', 'quotes'],
                'rules' => [
                    [
                        'actions' => ['logout', 'posts', 'quotes'],
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

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Yii::$app->urlManager->createUrl('posts/admin-to-do'));
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionPictureUpload() {
        $model = new \app\models\UploadForm;

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->validate()) {
                //$file_made = mkdir('images/ayo', 0777);
                $model->file->saveAs('images/articles/' . $model->file->baseName . '.' . $model->file->extension);
            }
            return $this->render('picture-upload-confirmed');
        }
        return $this->render('upload-picture', ['model' => $model]);
    }
    
        
    public function actionCampusPictureUpload() {
        $model = new \app\models\UploadForm;

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->validate()) {
                //$file_made = mkdir('images/ayo', 0777);
                $model->file->saveAs('images/campus/' . $model->file->baseName . '.' . $model->file->extension);
            }
            return $this->render('picture-upload-confirmed');
        }
        return $this->render('campus-upload-picture', ['model' => $model]);
    }

    public function actionDownload() {
        $path = Yii::getAlias('@webroot') . '/uploads';

        $file = $path . '/1.pdf';

        if (file_exists($file)) {

            Yii::$app->response->sendFile($file);
        }
    }

    public function actionPosts() {

        $model = new \app\models\Posts();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            Yii::$app->db->createCommand()
                    ->insert('posts', ['id' => NULL, 'date' => $model->date, 'category' => $model->category, 'picture' => $model->picture, 'title' => strtoupper($model->title), 'post' => $model->post])
                    ->execute();
            return $this->render('upload-confirm');
        } else {
            return $this->render('posts', ['model' => $model]);
        }
    }
    
    public function actionFillersPictureUpload() {
        $model = new \app\models\UploadForm;

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->validate()) {
                //$file_made = mkdir('images/ayo', 0777);
                $model->file->saveAs('images/fillers/' . $model->file->baseName . '.' . $model->file->extension);
            }
            return $this->render('picture-upload-confirmed');
        }
        return $this->render('campus-upload-picture', ['model' => $model]);
    }

}
