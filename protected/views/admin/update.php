<h2>Gegevens wijzigen</h2>

<p>
<?php
	if(isset($success)){
		if($success){
			echo "De gegevens zijn aangepast.";
		}
	}else{
		echo "Merk op dat het hele bestuur van deze wijzigingen op de hoogte gebracht zal worden.";
	}
?>
</p>

<?php echo CHtml::beginForm(); ?>

<div class="form">
	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "name"); ?>
		<?php echo CHtml::activeTextField($model, "name"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "email"); ?>
		<?php echo CHtml::activeTextField($model, "email"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "current_password"); ?>
		<?php echo CHtml::activePasswordField($model, "current_password"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "new_password"); ?>
		<?php echo CHtml::activePasswordField($model, "new_password"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "confirm_password"); ?>
		<?php echo CHtml::activePasswordField($model, "confirm_password"); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton("Opslaan"); ?>
	</div>
</div>

<?php echo CHtml::endForm(); ?>