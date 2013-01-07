<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FIN_ID),array('view','id'=>$data->FIN_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_SOURCE')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_SOURCE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_YEAR')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_YEAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_AMOUNT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_FROM')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_FROM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIN_PRJ_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FIN_PRJ_ID); ?>
	<br />


</div>