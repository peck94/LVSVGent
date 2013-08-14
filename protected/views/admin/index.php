<h2>Beheer</h2>

Hier kan u administratieve gegevens bijwerken van deze webapplicatie.
<p>
<?php
	echo CHtml::link("Bewerken", array("admin/update"));
?>
</p>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'username',
		'email',
	),
)); ?>