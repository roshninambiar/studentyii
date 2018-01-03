<h1>VIEW</h1>
<?php

use yii\helpers\Html;

//print_r($stu);

foreach($stu as $x){
	echo $x->id."  ";
	echo $x->name."  ";
	echo $x->dept."  <br>";
}
?>

<!-- <a href="index.php?r=student/insert">Insert more values?</a>
 -->

<?= Html::a('INSERT MORE VALUES', ['/student/insert'], ['class'=>'btn btn-primary']) ?>