<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NWS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NWS_ID),array('view','id'=>$data->NWS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NWS_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->NWS_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NWS_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->NWS_TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NWS_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->NWS_CONTENT); ?>
	<br />


</div>