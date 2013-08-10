<h2>Wachtwoord wijzigen</h2>

<?php
	if(isset($success) && $success){
?>
Het wachtwoord is succesvol aangepast.
<?php
	}
?>

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