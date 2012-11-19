<p></p>
<? foreach ($data as $project): ?>
	<?php $this->renderPartial('//project/_view_long', array('data'=>$project)); ?>
<? endforeach; ?>

<? if (Yii::app()->user->checkAccess('admin')): ?>
	<?php $this->renderPartial('//project/_edit_link'); ?>
<? endif; ?>


