<?php
	echo CHtml::link("Hoofdpagina", array("site/index"));

	if(Yii::app()->user->isGuest)
	{
		echo CHtml::link("Aanmelden", array("login/login"));
	}else{
		echo CHtml::link("Ledenlijst", array("leden/index"));
		echo CHtml::link("Ledentypes", array("lidtype/index"));
		echo CHtml::link("Wachtwoord wijzigen", array("admin/update"));
		echo CHtml::link("Afmelden", array("login/logout"));
?>
<hr/>
Aangemeld als <strong><?php echo Yii::app()->user->name; ?></strong>
<?php
	}
?>