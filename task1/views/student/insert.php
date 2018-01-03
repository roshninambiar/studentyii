<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//or use yii\db\ActiveForm


$this->title ='WELCOME TO REGISTRATION DESK';
?>
<h1> <?= $this->title ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($stu, 'id'); ?>
<?= $form->field($stu, 'name'); ?>
<?= $form->field($stu, 'dept'); ?>


<?= Html::submitButton('SUBMIT', ['id'=>'sub','btn btn-primary']); ?>

<?php ActiveForm::end(); ?>

<!-- = Html::submitButton('SUBMIT', ['btn btn-primary'], 'onclick'=>'js:insertValues();') ?> -->

<!-- echo CHtml::button("(+)",array('title'=>"Topic",'onclick'=>'js:setTop();')); -->



<!--  Html::a('REGISTER', ['/controller/action'], ['class'=>'btn btn-primary'])  -->


