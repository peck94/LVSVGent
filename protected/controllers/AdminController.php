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
		if(isset($_POST['AdminModel'])){
			$model->attributes = $_POST['AdminModel'];
			
			$this->render("update", array("success" => $model->save()));
		}else{
			$this->render("update", array("model" => $model));
		}
	}
}
?>