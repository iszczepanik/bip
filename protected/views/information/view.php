<? if (isset($viewed)) : ?>

	<h2><? echo $viewed->INF_NAME; ?></h2>
	<? echo $viewed->INF_CONTENT; ?>
	<? if (Yii::app()->user->checkAccess('admin')): ?>
		<? if (Yii::app()->user->checkAccess('admin')): ?>
			<?php $this->renderPartial('//information/_edit_link', array('id'=>$viewed->INF_ID)); ?>
		<? endif; ?>
	<? endif; ?>
	
	<?
	if (count($viewed->Projects) > 0)
		$this->renderPartial('//project/_view', array('data'=>$viewed->Projects));
	?>
	<?
	if (count($viewed->Files) > 0)
		$this->renderPartial('//file/_view', array('data'=>$viewed->Files));
	?>
	
	<?php $this->renderPartial('_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
