<div class="row" >
<div class="span3" >

<div class="side_menu">
	<?php $this->renderPartial('//sites/_menu', array('data'=>Site::model()->findAll()))?>
</div>

</div>

<div class="span9">
<?
if (isset($viewed)) : ?>

	<h2><? echo $viewed->INF_NAME; ?></h2>
	<? echo $viewed->INF_CONTENT; ?>
	<?php $this->renderPartial('_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
</div>

</div>