<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FIL_ID),array('view','id'=>$data->FIL_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_CAT')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_CAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_CREATE_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_CREATE_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_CREATE_BY')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_CREATE_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_MODIFY_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_MODIFY_DATE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_MODIFY_BY')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_MODIFY_BY); ?>
	<br />

	*/ $uploaded->download('file.pdf', true); ?>

</div>