<h2><?php echo $title; ?></h2>

<?php echo CHtml::beginForm(); ?>

<div class="form">
	<div class="row">
		<?php echo CHtml::activeLabel($model, "titel"); ?>
		<?php echo CHtml::activeTextField($model, "titel"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabel($model, "kost"); ?>
		<?php echo CHtml::activeTextField($model, "kost"); ?>
	</div>
	
	<div class="row submit">
		<?php echo CHtml::submitButton("Opslaan"); ?>
	</div>
</div>

<?php echo CHtml::endForm(); ?>