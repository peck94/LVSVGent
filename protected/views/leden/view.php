<h2><?php echo $model->voornaam . " " . $model->achternaam ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'aangever',
		'voornaam',
		'achternaam',
		'email',
		'adres',
		'postcode',
		'stad',
		'studierichting',
		'opmerkingen',
		'jaar',
		'betaald',
		'type',
	),
)); ?>