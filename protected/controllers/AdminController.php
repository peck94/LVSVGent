<?php
class AdminController extends CController
{
	public function filters()
    {
        return array( 'accessControl' );
    }

	public function accessRules()
    {
        return array(
            array('allow', // enkel ingelogde gebruikers kunnen overal aan
                'users'=>array('@'),
            ),
            array('deny'),
        );
    }

	public function actionUpdate()
	{
		$model = new AdminModel;

		$this->render("update", array("model" => $model));
	}
}
?>