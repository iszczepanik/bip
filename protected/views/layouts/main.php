<!DOCTYPE html>
<html lang="en">
<head>
	<? $contrast = isset(Yii::app()->request->cookies['contrast']) ? Yii::app()->request->cookies['contrast']->value : 'normal'; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/datepicker.css?v=<? echo Yii::app()->params['version']; ?>"  />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<? if (Yii::app()->params['noindex']): ?>
	<meta name="robots" content="noindex, nofollow">
	<? endif; ?>
</head>
<? if ($contrast == 'high'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications-high.css?v=<? echo Yii::app()->params['version']; ?>"  />
<? else: ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications.css?v=<? echo Yii::app()->params['version']; ?>"  />
<? endif; ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datepicker.js?v=<? echo Yii::app()->params['version']; ?>"></script>
<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">
<? 
$cookieName = "getCookies".Yii::app()->request->subdomain;
$getCookies = isset(Yii::app()->request->cookies[$cookieName]) ? Yii::app()->request->cookies[$cookieName]->value : '0';
if ($getCookies != '1'): ?>
<div class="alert alert-info" >
<h4>Informacja o plikach cookies</h4>
Używamy plików cookies, aby ułatwić Ci korzystanie z naszego serwisu oraz do celów statystycznych. Jeśli nie blokujesz tych plików, to zgadzasz się na ich użycie oraz zapisanie w pamięci urządzenia. Pamiętaj, że możesz samodzielnie zarządzać cookies, zmieniając ustawienia przeglądarki.
<div style="text-align: center" >
<a href="<?php echo $this->createUrl('/site/getCookies'); ?>" class="btn btn-info btn-mini" style="margin-top: 10px" >Rozumiem, nie pokazuj więcej.</a>
</div>
</div>
<? endif; ?>

<div class="row" >
	<div class="span3" >
		<?
		$logo = Image::GetLogo();
		if ($logo != "none") :
		?>
			<!--<a href="<? echo Yii::app()->params['homepage']; ?>">-->
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/<? echo $logo; ?>"
			alt="<? echo strip_tags(Information::FindByName('Pełna nazwa organizacji')); ?>" /></a>
			<br />
			
		<? endif; 
		if (Yii::app()->user->checkAccess('admin')): ?>
			<a class="pull-right" href="<?php echo $this->createUrl('/imageAdmin/upload'); ?>">Zaimportuj logo</a><br />
		<? endif; ?>
		<br />	
		
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/BIPnij.png" alt="BIPnij" />
		
		<div class="side_menu">
			<?php $this->renderPartial('//layouts/_menu', array('data'=>Site::model()->findAll(array("order"=>"SIT_DISPALY_ORDER")), 'contrast'=>$contrast))?>
			<? if (Yii::app()->user->checkAccess('admin') || Yii::app()->user->checkAccess('superadmin')): ?>
				<?php $this->renderPartial('//layouts/_adminmenu'); ?>
			<? endif; ?>
			<br />
			<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/pl/" rel="tooltip" title="Licencja CC BY-NC-SA 3.0 PL"  >
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/by-nc-sa.png" 
				alt="Licencja CC BY-NC-SA 3.0 PL" />
			</a>
		</div>
		
	</div>
	<div class="span9">
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
		<h1><? echo strip_tags(Information::FindByName('Pełna nazwa organizacji')); ?><small><br /><?php echo CHtml::encode(Yii::app()->name); ?></small> <!--<span class="label label-info">Beta</span>--></h1>
		
		<?php echo $content; ?>
		
	</div>
</div>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Zamknij</button>
	</div>
</div>

<footer class="footer" id="footer">	
	<div>
			<img src="/img/kapital_ludzki.jpg" alt="Kapitał Ludzki" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/most.jpg" alt="Stowarzyszenie Most" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/bonafides.png" alt="Stowarzyszenie Bona Fides" />
			<img class="last" src="<?php echo Yii::app()->request->baseUrl; ?>/img/fundusz_spoleczny.jpg" alt="Europejski Fundusz Spłeczny" />
		<p style="margin-top: 25px;">Projekt współfinansowany ze środków Unii Europejskiej w ramach Europejskiego Funduszu Społecznego</p>
		<small class="muted" >
			<?php echo CHtml::encode(Yii::app()->name); ?> - Wersja <? echo Yii::app()->params['version']; ?>
			
		</small>
		<div><a href="<?php echo Yii::app()->request->baseUrl; ?>/materialy/Instrukcja_instalacji.pdf" target="blank" >Instrukcja instalacji</a></div>
	</div>
</footer><!-- footer -->

</div><!-- page -->
<script type="text/javascript">

    $(document).ready(function() {

		$('#dp_od').datepicker();
		$('#start_date').datepicker();
		$('#end_date').datepicker();
		
		$('[data-toggle="modal"]').click(function(e) {
			e.preventDefault();
			var url = $(this).attr('href');
			if (url.indexOf('#') == 0) {
				$(url).modal('open');
			} else {
				$.get(url, function(data) {
					$('.modal-body').empty();
					$('.modal-body').append(data);
					$('#myModal').modal("show");
				});
			}
		});
		
		$('.rejestr-zmian').click(function(e) {
			e.preventDefault();
			$("#"+this.id+"-grid").toggle();
		});
    });
	
</script>
</body>
</html>