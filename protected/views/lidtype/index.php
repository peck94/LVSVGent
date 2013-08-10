<h2>Ledentypes</h2>

<p><?php echo CHtml::link("Nieuw type", array("lidtype/new")); ?></p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'type-grid',
	'dataProvider'=>LidType::model()->search(),
	'filter'=>LidType::model(),
	'columns'=>array(
		'titel',
		'kost',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>