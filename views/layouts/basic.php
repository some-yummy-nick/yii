<?php

use app\assets\AppAsset;
use app\assets\BasicAsset;
use yii\helpers\Html;

AppAsset::register($this);
BasicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<h1>hello basic</h1>

<div class="wrap">
    <div class="container">
        <?php if (isset($this->blocks['block1'])): ?>
            <?php echo $this->blocks['block1'] ?>
        <?php endif; ?>

        <nav>
            <ul class="nav nav-pills">
                <li class="active" role="presentation">
                    <?= Html::a('Главная', 'web') ?>
                </li>
                <li role="presentation">
                    <?= Html::a('Статьи', ['post/index']) ?>
                </li>
                <li role="presentation">
                    <?= Html::a('Статья', ['post/show']) ?>
                </li>
            </ul>
        </nav>

        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
