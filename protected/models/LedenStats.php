<?php
class LedenStats extends CModel
{
	public $totaal, $jaartotaal, $betaald, $jaarbetaald, $onbetaald, $jaaronbetaald;
	
	public function load()
	{
		$model = Lid::model();
		$ditjaar = date("Y");
		
		$this->totaal = count($model->findAll());
		$this->jaartotaal = count($model->findByAttributes(array("jaar" => $ditjaar)));
		
		$this->betaald = count($model->findByAttributes(array("betaald" => 1)));
		$this->jaarbetaald = count($model->findByAttributes(array("betaald" => 1, "jaar" => $ditjaar)));
		
		$this->onbetaald = $this->totaal - $this->betaald;
		$this->jaaronbetaald = count($model->findByAttributes(array("betaald" => 0, "jaar" => $ditjaar)));
	}
	
	public function attributeNames()
	{
		return array("totaal", "jaartotaal", "betaald", "jaarbetaald", "onbetaald", "jaaronbetaald");
	}
	
	public function attributeLabels()
	{
		return array(
			"totaal" => "Totaal",
			"jaartotaal" => "Totaal dit jaar",
			"betaald" => "Betaald",
			"jaarbetaald" => "Betaald dit jaar",
			"onbetaald" => "Niet betaald",
			"jaaronbetaald" => "Niet betaald dit jaar",
		);
	}
}
?>