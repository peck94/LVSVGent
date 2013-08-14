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
    
    public function actionIndex()
    {
    	$model = new AdminModel;
    	$model->load();
    	$this->render("index", array("model" => $model));
    }
    
    public function actionUpdate()
    {
    	$model = new AdminModel;
    	$model->load();
    	if(isset($_POST['AdminModel'])){
    		$model->attributes = $_POST['AdminModel'];
    		if($model->save()){
    			$this->redirect(array("admin/index"));
    			return;
    		}
    	}
    
    	$this->render("update", array("model" => $model));
    }
}
?>