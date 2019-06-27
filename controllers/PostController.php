<?php


namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex()
    {
//        $names = ['Petrov', 'Sidorov'];

//        debug($names);

        $model = new TestForm();
        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
               return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('index', compact('model'));
    }

    public function actionShow()
    {
//        $this->layout = 'basic';
        $this->view->title = 'show';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание']);

        return $this->render('show');
    }
}
