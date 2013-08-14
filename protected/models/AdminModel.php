<?php
class AdminModel extends CFormModel
{
	public $name, $current_password, $new_password, $confirm_password, $email, $username;

	public function rules()
	{
		return array(
			array("current_password, email", "required"),
			array("name, confirm_password, new_password", "safe"),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			"current_password" => "Huidig wachtwoord",
			"new_password" => "Nieuw wachtwoord",
			"confirm_password" => "Wachtwoord bevestigen",
			"email" => "E-mailadres",
			"username" => "Gebruikersnaam",
			"name" => "Naam",
		);
	}
	
	public function load()
	{
		$user = User::model()->findByPk(Yii::app()->user->id);
		$this->username = $user->username;
		$this->email = $user->email;
		$this->name = $user->name;
	}
	
	public function save()
	{
		// status bijhouden
		$status = true;
	
		// valideer regels
		if(!$this->validate()){
			// fout
			$status = false;
		}
		
		// haal gebruiker op
		$user = User::model()->findByPk(Yii::app()->user->id);
		
		// controleer wachtwoorden
		if($this->new_password != $this->confirm_password){
			$this->addError("confirm_password", "De wachtwoorden komen niet overeen.");
			$status = false;
		}
		
		// check huidig wachtwoord
		if(User::encrypt($this->current_password) != $user->password){
			$this->addError("current_password", "Het wachtwoord is onjuist.");
			$status = false;
		}
		
		// check e-mail
		if(preg_match("/[^ ]+@[^ ]+\.[^ ]{2,}/", $this->email) == 0){
			$this->addError("email", "Ongeldig e-mailadres.");
			$status = false;
		}
		
		// check naam
		if(preg_match("/^[a-zA-Z0-9]+$/", $this->username) == 0){
			$this->addError("username", "Ongeldige gebruikersnaam.");
			$status = false;
		}
		
		// opslaan indien alles ok
		if($status){
			$user->email = $this->email;
			if(!empty($this->new_password)){
				$user->password = User::encrypt($this->new_password);
			}
			$user->username = $this->username;
			$status = $user->save();
		}

		return $status;
	}
}
?>