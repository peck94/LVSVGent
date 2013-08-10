<?php
class SiteController extends CController
{
	public $layout = "//layouts/main";
	public $pageTitle = "LVSV Gent Administratie";

	/*
	*	Toon de indexpagina.
	*/
	public function actionIndex()
	{
		$this->render("index");
	}
}
?>