<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/datepicker.css"  />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications.css"  />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">
<header>
<? if (!Yii::app()->user->isGuest) : ?>
	<a class="pull-right" href="<?php echo $this->createUrl('/site/logout'); ?>">Wyloguj (<? echo Yii::app()->user->name; ?>)</a>
<? endif; ?>
<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
</header>

<div class="row" >
	<div class="span3" >
		<div class="side_menu">
			<? if (Yii::app()->user->checkAccess('admin')): ?>
				<?php $this->renderPartial('//layouts/_adminmenu'); ?>
			<? endif; ?>
			<?php $this->renderPartial('//layouts/_menu', array('data'=>Site::model()->findAll()))?>
		</div>
	</div>
	<div class="span9">
		<?php echo $content; ?>
	</div>
</div>

<footer class="footer" id="footer">	
	<div>
		<small class="muted" >
			<?php echo CHtml::encode(Yii::app()->name); ?> - Wersja <? echo Yii::app()->params['version']; ?>
		</small>
	</div>
</footer><!-- footer -->

</div><!-- page -->
<script type="text/javascript">

    $(document).ready(function() {

		$('#dp_do').datepicker();
		$('#dp_od').datepicker();
		
		
    });

</script>
</body>
</html>