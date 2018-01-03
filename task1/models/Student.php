<?php

namespace app\models;

use yii\db\ActiveRecord;

class Student extends ActiveRecord{

	public function rules(){
		return [
		[['name','dept'], 'required']
		];
	}

	public function getid(){
		return $this->id;
	}

	public static function tableName()
    {
        return 'student';
    }

  

}