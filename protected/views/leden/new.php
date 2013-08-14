<h2><?php echo $title; ?></h2>

Verplichte velden zijn aangeduid.

<?php echo CHtml::beginForm(); ?>

<div class="form">
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "aangever"); ?>
		<?php echo CHtml::activeTextField($model, "aangever"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "voornaam"); ?>
		<?php echo CHtml::activeTextField($model, "voornaam"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "achternaam"); ?>
		<?php echo CHtml::activeTextField($model, "achternaam"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "email"); ?>
		<?php echo CHtml::activeTextField($model, "email"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "adres"); ?>
		<?php echo CHtml::activeTextField($model, "adres"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "postcode"); ?>
		<?php echo CHtml::activeTextField($model, "postcode"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "stad"); ?>
		<?php echo CHtml::activeTextField($model, "stad"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "studierichting"); ?>
		<?php echo CHtml::activeTextField($model, "studierichting"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "stickers"); ?>
		<?php echo CHtml::activeTextField($model, "stickers"); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "opmerkingen"); ?>
		<?php echo CHtml::activeTextArea($model, "opmerkingen", array(
			"rows" => 20, "cols" => 40)); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "type"); ?>
		<?php
			$types = LidType::model()->findAll();
			$data = array("" => "");
			foreach($types as $type)
			{
				$data[$type->waarde] = $type->titel . " (EUR " . $type->kost . ")";
			}
		
			echo CHtml::activeDropDownList($model, "type", $data);
		?>
	</div>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model, "betaald"); ?>
		<?php echo CHtml::activeCheckBox($model, "betaald"); ?>
	</div>
	
	<div class="row submit">
		<?php echo CHtml::submitButton("Opslaan"); ?>
	</div>
</div>

<?php echo CHtml::endForm(); ?>