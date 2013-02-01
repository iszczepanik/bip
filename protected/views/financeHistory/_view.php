<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_HIST_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FIN_HIST_ID),array('view','id'=>$data->FIN_HIST_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_HIST_FIN_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_HIST_FIN_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_AMOUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_MODIFY_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_MODIFY_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_MODIFY_BY')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_MODIFY_BY); ?>
	<br />


</div>