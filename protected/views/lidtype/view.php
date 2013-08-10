<h2><?php echo $model->titel; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titel',
		'kost',
	),
)); ?>