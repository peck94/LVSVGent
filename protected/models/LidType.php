<?php
class LidType extends CActiveRecord
{
	public $titel, $waarde, $kost;

	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
    	return "types";
    }
    
    public function primaryKey()
    {
    	return "waarde";
    }
    
    public function rules()
    {
    	return array(
    		array("titel, kost", "required")
    	);
    }

    public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('titel',$this->titel,true);
		$criteria->compare('kost',$this->kost,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
?>