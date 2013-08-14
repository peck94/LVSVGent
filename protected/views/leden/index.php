<h2>Ledenlijst</h2>

<p>
	<?php echo CHtml::link("Nieuw lid", array("leden/new")); ?> |
	<?php echo CHtml::link("Stickers afdrukken", array("leden/print"), array("target" => "_blank")); ?> |
	<?php echo CHtml::link("Statistieken", array("leden/stats")); ?>
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'leden-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'aangever',
		'voornaam',
		'achternaam',
		'email',
		'adres',
		'postcode',
		'stad',
		'studierichting',
		'jaar',
		array(
			'name' => 'type',
			'value' => 'LidType::model()->findByAttributes(array("waarde" => $data->type))->titel'
		),
		array(
			'name' => 'betaald',
			'value' => '($data->betaald) ? "Ja" : "Nee"'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>