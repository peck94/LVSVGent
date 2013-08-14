<h2>Ledenstatistieken</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>Lid::statistics(),
	'attributes'=>array(
		'totaal',
		'jaartotaal',
		'betaald',
		'jaarbetaald',
		'onbetaald',
		'jaaronbetaald',
	),
)); ?>