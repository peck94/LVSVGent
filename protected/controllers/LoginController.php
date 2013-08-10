<?php
class LoginController extends CController
{
	public function actionLogin()
	{
		$model = new LoginForm;
		if(isset($_POST['LoginForm']))
		{
			$model->attributes = $_POST['LoginForm'];
		
			if($model->authenticate())
			{
				$this->redirect(array("site/index"));
				return;
			}
		}

		$this->render("index", array("model" => $model));
	}
	
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(array("site/index"));
	}
}
?>