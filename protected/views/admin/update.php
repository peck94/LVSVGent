<h2>Wachtwoord wijzigen</h2>

<p>
<?php
	if(isset($success)){
		if($success){
			echo "Het wachtwoord is aangepast.";
		}
	}else{
		echo "Hier kan u het wachtwoord aanpassen voor deze account.<br/>
		Merk op dat het hele bestuur van deze wijziging op de hoogte gebracht zal worden.";
	}
?>
</p>

<?php echo CHtml::beginForm(); ?>

<div class="form">
	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabel($model, "current_password"); ?>
		<?php echo CHtml::activePasswordField($model, "current_password"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabel($model, "new_password"); ?>
		<?php echo CHtml::activePasswordField($model, "new_password"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabel($model, "confirm_password"); ?>
		<?php echo CHtml::activePasswordField($model, "confirm_password"); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton("Opslaan"); ?>
	</div>
</div>

<?php echo CHtml::endForm(); ?>