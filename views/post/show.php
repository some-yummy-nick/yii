<?php
use app\widgets\MyWidget;
$this->registerJsFile('@web/js/post.js', ['depends' => 'yii\web\YiiAsset']);
//$this->title = 'Show';
echo MyWidget::widget(['name'=>'Вася']);

//$this->setAssetManager(['$appendTimestamp'=>'true'])
?>
<?php MyWidget::begin(); ?>
<h1>Привет мир</h1>
<?php MyWidget::end(); ?>

<h1>show action</h1>
<script>
    console.log(6);
</script>

<?php $this->beginBlock('block1'); ?>
<h1>заголовок</h1>
<?php $this->endBlock(); ?>
<?php
$js = <<<JS
console.log(9);
JS;
$this->registerJs($js);
?>

<?php

debug($catsLength);
echo '<ul>';
foreach ($categories as $category) {
    echo '<li>' . $category['title'];

    echo '<ul>';
    $products = $category['products'];
    foreach ($products as $product) {
        echo '<li>' . $product['title'] . '</li>';
    }
    echo '</ul>' . '</li>';


}
echo '</ul>';
foreach ($cats as $cat) {
    echo $cat['id'] . ' ' . $cat['title'] . '<br>';
}
?>
