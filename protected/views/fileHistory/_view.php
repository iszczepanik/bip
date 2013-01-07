<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_HIST_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FIL_HIST_ID),array('view','id'=>$data->FIL_HIST_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_HIST_FIL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_HIST_FIL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_MODIFY_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_MODIFY_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIL_MODIFY_BY')); ?>:</b>
	<?php echo CHtml::encode($data->FIL_MODIFY_BY); ?>
	<br />


</div>