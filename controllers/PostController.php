<?php


namespace app\controllers;

use app\models\Category;
use app\models\TestForm;
use Yii;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex()
    {
//        $names = ['Petrov', 'Sidorov'];

//        debug($names);

        $model = new TestForm();
//        $model->name = 'hello';
//        $model->email = 'mail@mail.ru';
//        $model->text = 'сообщение';
//        $model->save();

        $posts        = TestForm::findOne(3);
//        $posts->email = 'newemail@mail.com';
//        $posts->save();
//        $posts->delete();

        TestForm::deleteAll(['>', 'id', 3]);

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');

                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('index', compact('model', 'posts'));
    }

    public function actionShow()
    {
//        $cats = Category::find()->all();
//        $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
//        $cats = Category::find()->asArray()->all();
//        $cats = Category::find()->asArray()->where('parent=691')->all();
//        $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
//        $cats = Category::find()->asArray()->where(['<=', 'id', '695'])->all();
        $cats       = Category::find()->asArray()->where('parent=691')->limit(1)->all();
        $catsLength = Category::find()->count();
        $categories = Category::find()->asArray()->with('products')->all();


//        $this->layout = 'basic';
        $this->view->title = 'show';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание']);

        return $this->render('show', compact('cats', 'catsLength', 'categories'));
    }
}
