<?php
class UserIdentity extends CUserIdentity
{
	private $_id, $record;
	
	public function authenticate()
	{
		// gebruiker ophalen uit database
		$this->record = User::model()->findByAttributes(
			array("username" => $this->username)
		);
		
		// controleer record
		if($this->record === null){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}else if($this->record->password !== md5($this->password)){
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}else{
			$this->_id = $this->record->id;
			$this->errorCode = self::ERROR_NONE;
		}
		
		return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
	public function getRecord()
	{
		return $this->record;
	}
}
?>