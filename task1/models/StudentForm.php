<?php

namespace app\models;

use yii\base\Model;

class StudentForm extends Model{

	public $sname;
	public $dept;


	public function rules(){

			return [
					[
						['sname','dept'], 'required']];
	}
}