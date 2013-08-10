<?php
class LoginForm extends CFormModel
{
	public $username, $password;
	
	public function rules()
	{
		return array(
			array("username, password", "required"),
		);
	}

	public function attributeLabels()
	{
		return array(
			"username" => "Gebruikersnaam",
			"password" => "Wachtwoord",
		);
	}
	
	public function authenticate()
	{
		$identity = new UserIdentity($this->username, $this->password);
		$identity->authenticate();
		
		switch($identity->errorCode)
		{
			case UserIdentity::ERROR_NONE:
				Yii::app()->user->login($identity);
				return true;
				break;
			
			case UserIdentity::ERROR_USERNAME_INVALID:
			case UserIdentity::ERROR_PASSWORD_INVALID:
				$this->addError("username", "De gegevens zijn incorrect.");
				break;
			
			default:
				$this->addError("username", "Er is een fout opgetreden.");
				break;
		}
		
		return false;
	}
}
?>