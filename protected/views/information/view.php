<? if (isset($viewed)) : ?>

	<h2><? echo $viewed->INF_NAME; ?></h2>
	<? echo $viewed->INF_CONTENT; ?>
	<? if (Yii::app()->user->checkAccess('admin')): ?>
		<? if (Yii::app()->user->checkAccess('admin')): ?>
			<?php $this->renderPartial('//information/_edit_link', array('id'=>$viewed->INF_ID)); ?>
		<? endif; ?>
	<? endif; ?>
	<?php $this->renderPartial('_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
