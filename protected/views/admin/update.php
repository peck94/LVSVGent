<h2>Wachtwoord wijzigen</h2>

<?php echo CHtml::beginForm(); ?>

<div class="form">
	<div class="row">
		<?php echo CHtml::activeLabel($model, "current_password"); ?>
		<?php echo CHtml::activePasswordField($model, "current_password"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabel($model, "new_password"); ?>
		<?php echo CHtml::activePasswordField($model, "new_password"); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton("Opslaan"); ?>
	</div>
</div>

<?php echo CHtml::endForm(); ?>