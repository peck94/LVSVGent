<?php
class LidTypeController extends CController
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
		$model = new LidType("search");
		$model->unsetAttributes();
		if(isset($_GET['LidType'])){
			$model->attributes = $_GET['LidType'];
		}
	
		$this->render("index", array("model" => $model));
	}

	public function actionView()
	{
		$id = $_GET['id'];
		$model = LidType::model()->findByPk($id);

		$this->render("view", array("model" => $model));
	}
	
	public function actionNew()
	{
		$model = new LidType;
		if(isset($_POST['LidType'])){
			$model->attributes = $_POST['LidType'];
			
			$model->waarde = time();
			
			if($model->validate() && $model->save()){
				$this->redirect(array("lidtype/index"));
				return;
			}		
		}

		$this->render("new", array("title" => "Nieuw type", "model" => $model));
	}
	
	public function actionUpdate()
	{
		$model = LidType::model()->findByAttributes(
			array("waarde" => $_GET['id'])
		);
		if(isset($_POST['LidType'])){
			$model->attributes = $_POST['LidType'];
			
			if($model->validate() && $model->save()){
				$this->redirect(array("lidtype/index"));
				return;
			}
		}
	
		$this->render("new", array("title" => "Type bewerken", "model" => $model));
	}
	
	public function actionDelete()
	{
		$id = $_GET['id'];
		
		LidType::model()->findByPk($id)->delete();
		$this->redirect(array("lidtype/index"));
	}
}
?>