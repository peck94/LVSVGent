<?php
class AdminModel extends CFormModel
{
	public $name, $current_password, $new_password, $confirm_password;
	
	public function rules()
	{
		return array(
			array("current_password, new_password, confirm_password", "required"),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			"current_password" => "Huidig wachtwoord",
			"new_password" => "Nieuw wachtwoord",
			"confirm_password" => "Wachtwoord bevestigen",
		);
	}
	
	public function save()
	{
		// naam ophalen
		$name = Yii::app()->user->name;
		
		// status bijhouden
		$status = true;
		
		// controleer of de wachtwoorden overeenkomen
		if($this->new_password !== $this->confirm_password){
			$this->addError("confirm_password", "De wachtwoorden komen niet overeen.");
			$status = false;
		}
		
		// controleer of het wachtwoord juist is
		$user = User::model()->findByAttributes(array("username" => $name));
		if(md5($this->current_password) !== $user->password){
			$this->addError("current_password", "Het wachtwoord is onjuist.");
			$status = false;
		}
		
		// als alles ok is
		if($status){
			// sla de data op
			$user->password = md5($this->new_password);
			$status = $user->save();
		}
		
		// geef de status terug
		return $status;
	}
}
?>