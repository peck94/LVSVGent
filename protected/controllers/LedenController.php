<?php
class LedenController extends CController
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
		$model = new Lid("search");
		$model->unsetAttributes();
		if(isset($_GET['Lid'])){
			$model->attributes = $_GET['Lid'];
		}
	
		$this->render("index", array("model" => $model));
	}
	
	public function actionView()
	{
		$id = $_GET['id'];
		$model = Lid::model()->findByPk($id);

		$this->render("view", array("model" => $model));
	}
	
	public function actionNew()
	{
		$model = new Lid;
		if(isset($_POST['Lid']))
		{
			$model->attributes = $_POST['Lid'];
			
			$model->id = time();
			$model->jaar = date("Y");
			
			if($model->validate() && $model->save())
			{
				$this->redirect(array("leden/index"));
				return;
			}
		}
	
		$this->render("new", array("model" => $model, "title" => "Nieuw lid"));
	}
	
	public function actionUpdate()
	{
		$model = Lid::model()->findByAttributes(
			array("id" => $_GET['id'])
		);
		if(isset($_POST['Lid']))
		{
			$model->attributes = $_POST['Lid'];

			if($model->validate() && $model->save())
			{
				$this->redirect(array("leden/index"));
				return;
			}
		}
	
		$this->render("new", array("model" => $model, "title" => "Lid bewerken"));
	}
	
	public function actionDelete()
	{
		$id = $_GET['id'];
		
		Lid::model()->findByPk($id)->delete();
		$this->redirect(array("leden/index"));
	}
	
	public function actionPrint()
	{
		$this->render("print");
	}
}
?>