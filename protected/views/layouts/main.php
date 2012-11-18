<!DOCTYPE html>
<html lang="en">
<head>
	<? $contrast = isset(Yii::app()->request->cookies['contrast']) ? Yii::app()->request->cookies['contrast']->value : ''; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/datepicker.css"  />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<? if ($contrast == 'high'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications-high.css"  />
<? else: ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications.css"  />
<? endif; ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">
<header>

<ul class="nav nav-pills pull-right">
	<li><a href="<?php echo $this->createUrl('/site/contrast'); ?>">
		<? if ($contrast == 'high'): ?><i class="icon-eye-open" ></i> Widok Podstawowy<? else: ?><i class="icon-eye-open" ></i> Duży kontrast<? endif; ?>
	</a></li>
	<? if (!Yii::app()->user->isGuest) : ?>
	<li><a href="<?php echo $this->createUrl('/site/logout'); ?>">
		<i class="icon-off" ></i> Wyloguj (<? echo Yii::app()->user->name; ?>)</a>
	</li>
	<? endif; ?>
</ul>

<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
<span class="label label-info">Beta</span>
</header>

<div class="row" >
	<div class="span3" >
		<div class="side_menu">
			<? if (Yii::app()->user->checkAccess('admin')): ?>
				<?php $this->renderPartial('//layouts/_adminmenu'); ?>
			<? endif; ?>
			<?php $this->renderPartial('//layouts/_menu', array('data'=>Site::model()->findAll(), 'contrast'=>$contrast))?>
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