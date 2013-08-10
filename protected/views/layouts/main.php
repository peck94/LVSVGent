<html>
	<head>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
		<div id="header">
			<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
		</div>
		
		<div id="menu">
			<?php $this->widget("application.widgets.MenuWidget"); ?>
		</div>
		
		<div id="content">
			<?php echo $content; ?>
		</div>
		
		<div id="footer">
			Copyright &copy; LVSV Gent, 2013-2014
		</div>
	</body>
</html>