<h2>Ledentypes</h2>

<p><?php echo CHtml::link("Nieuw type", array("lidtype/new")); ?></p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'titel',
		'kost',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>