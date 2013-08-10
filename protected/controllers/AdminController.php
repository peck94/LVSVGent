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
			$status = $model->save();
			if($status){
				$model = new AdminModel;
			}
			
			$this->render("update", array("model" => $model, "success" => $status));
		}else{
			$this->render("update", array("model" => $model));
		}
	}
}
?>