<?php

namespace app\controllers;

use Yii;
use app\models\Student;
use app\models\StudentForm;
use yii\web\Controller;

class StudentController extends Controller{

	public function actionIndex(){
		$model = new StudentForm;
		if($model->load(\Yii::$app->request->post()) && $model->validate()){
			//return $this->render('register',['data'=>\Yii::$app->request->post()]);
		}
		else{
			return $this->render('home', ['model'=>$model]);
		}
	}

	public function actionView(){ 

		$student = Student::find()->all();
		//$student = Student::find()->orderBy('name')->all();
		//$student = Student::find()->where(['id' => ['s1']])->all();   

		return $this->render('index',['stu'=>$student]);

	}

	public function actionInsert(){
		$student = new Student();
		//$student = Student::findOne('s1');
		//echo "<pre>";print_r($student);
		//echo $student->id; exit;
		if($student->load(\Yii::$app->request->post())){
			$data = Yii::$app->request->post('Student');		//returns an array 
			$student->attributes = $data;						//each attribute is assigned the value from the array
						
			$student->save();									//saved into the database
			return $this->render('thanks');
		}
		else{
			return $this->render('insert',['stu'=>$student]);
		}
	}

}