<?php
$this->registerJsFile('@web/js/post.js', ['depends'=> 'yii\web\YiiAsset']);
//$this->title = 'Show';

//$this->setAssetManager(['$appendTimestamp'=>'true'])
?>

<h1>show action</h1>
<script>
    console.log(6);
</script>

<?php $this->beginBlock('block1'); ?>
<h1>заголовок</h1>
<?php $this->endBlock(); ?>
<?php
$js=<<<JS
console.log(9);
JS;
$this->registerJs($js);
?>
