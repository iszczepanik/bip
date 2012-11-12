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
<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	<? if (!Yii::app()->user->isGuest) : ?>
		<a href="<?php echo $this->createUrl('/site/logout'); ?>">Wyloguj (<? echo Yii::app()->user->name; ?>)</a>
	<? endif; ?>


	<? if (Yii::app()->user->checkAccess('admin')): ?>
	<h2>Administracja</h2>
	<div class="main-menu" >
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>array(
				array('label'=>'Użytkownicy', 'url'=>array('/user/admin'), 'visible'=>Yii::app()->user->checkAccess('superadmin')),
				array('label'=>'Radni', 'url'=>array('/radny/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Artykuły - kategorie', 'url'=>array('/NewsCategoryBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('superadmin')),
				array('label'=>'Ekspertyzy', 'url'=>array('/EkspertyzaBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Komentarze do uchwał / projektów', 'url'=>array('/KomentarzUchwalyBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
		    ),
		)); ?>
	</div>
	<? endif; ?>
</header>

	<?php echo $content; ?>


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