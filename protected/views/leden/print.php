<h2>Stickers</h2>

<pre>
<?php
	$leden = Lid::model()->findAll();
	
	foreach($leden as $lid){
		echo $lid->voornaam . " " . $lid->achternaam . "\n";
		echo $lid->adres . "\n";
		echo $lid->postcode . " " . $lid->stad . "\n";
		echo "\n";
	}
?>
</pre>