<? if (isset($viewed)) : ?>

	<?
	$class = '';
		if ($viewed->INF_SHOW == 0)
			if (Yii::app()->user->checkAccess('admin'))
				$class = 'muted';
			else
				$class = 'display-none';
	?>
	
	<div class="<? echo $class; ?>" >

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
	
	if (count($viewed->Files) > 0)
		$this->renderPartial('//file/_view_link', array('data'=>$viewed->Files));
	
	$this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0));
	?>
	
	</div>

<? endif; ?>
