<?php

use yii\helpers\Html;
 //basec html properties
use yii\widgets\ActiveForm;
?>
<!-- 

<?php $form=ActiveForm::begin(); ?>

<?= $form->field($model,'sname'); ?>
<?= $form->field($model,'dept'); ?>
<?= Html::submitButton('Regiter',['class'=>'btn btn-success']); ?>

<?php $form=ActiveForm::end(); ?> -->


<html>
<head>
	<title>Student Registration</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form  action="reg.php" method="GET">
	<div>
		NAME: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="sname">
	</div>
	<div>
		DEPARTMENT: <input type="text" name="dept">
	</div>
		<button>REGISTER</button>
	 </form>

</body>
</html>
