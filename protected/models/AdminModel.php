<?php
class AdminModel extends CFormModel
{
	public $name, $current_password, $new_password, $confirm_password;
	
	public function attributeLabels()
	{
		return array(
			"current_password" => "Huidig wachtwoord",
			"new_password" => "Nieuw wachtwoord",
			"confirm_password" => "Wachtwoord bevestigen",
		);
	}
}
?>