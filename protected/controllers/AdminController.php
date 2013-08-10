<?php
class AdminController extends CController
{
	public function actionUpdate()
	{
		$model = new User;

		$this->render("update", array("model" => $model));
	}
}
?>