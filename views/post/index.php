<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>test</h1>
<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo Yii::$app->session->getFlash('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo Yii::$app->session->getFlash('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<?php $form = ActiveForm::begin(['options' => ['class' => 'my-form']]); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email', ['class' => 'my class']) ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea() ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>

<?php debug($posts); ?>
