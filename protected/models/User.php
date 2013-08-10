<?php
class User extends CActiveRecord
{
	public $username, $password, $id, $name;

	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
    	return "bestuur";
    }
    
    public function primaryKey()
    {
    	return "id";
    }
}
?>