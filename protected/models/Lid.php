<?php
class Lid extends CActiveRecord
{
	public $voornaam, $achternaam, $aangever, $email, $adres, $postcode, $stad;
	public $studierichting, $stickers, $opmerkingen, $type, $id, $betaald, $jaar;

	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
    	return "leden";
    }
    
    public function primaryKey()
    {
    	return "id";
    }
    
    public function rules()
    {
    	return array(
    		array("voornaam, achternaam, aangever, email, adres, postcode, stad, studierichting, type, id", "required"),
    		array("betaald", "boolean"),
    	);
    }
    
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('aangever',$this->aangever,true);
		$criteria->compare('voornaam',$this->voornaam,true);
		$criteria->compare('achternaam',$this->achternaam,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('adres',$this->adres,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('stad',$this->stad,true);
		$criteria->compare('studierichting',$this->studierichting,true);
		$criteria->compare('opmerkingen',$this->opmerkingen,true);
		$criteria->compare('jaar',$this->jaar);
		$criteria->compare('betaald',$this->betaald);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
?>