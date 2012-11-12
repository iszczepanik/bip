<div class="row" >
<div class="span3" >

<div class="side_menu">
	<?php $this->renderPartial('_menu', array('data'=>$model))?>
</div>

</div>

<div class="span9">
<?
if (isset($viewed)) : ?>

	<h2><? echo $viewed->SIT_NAME; ?></h2>
	<?php $this->renderPartial('_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
</div>

</div>