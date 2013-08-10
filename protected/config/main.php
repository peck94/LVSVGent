<?php
	date_default_timezone_set("Europe/Brussels");

	return array(
		"name" => "LVSV Gent Administratie",
		"defaultController" => "site",
		"components" => array(
			"db" => array(
				"connectionString" => "mysql:host=localhost;dbname=lvsv",
				"emulatePrepare" => "true",
				"username" => "root",
				"password" => base64_decode("cW5lZ3UyQCYiJGlp"),
				"charset" => "utf8",
				"tablePrefix" => "",
			),
			"user" => array(
				"loginUrl" => array("login/login"),
			),
		),
		
		"import" => array(
        	"application.models.*",
        	"application.components.*",
    	),
	);
?>