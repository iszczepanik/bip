<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRJ_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PRJ_ID),array('view','id'=>$data->PRJ_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRJ_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->PRJ_DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRJ_AMOUNT_DONATION')); ?>:</b>
	<?php echo CHtml::encode($data->PRJ_AMOUNT_DONATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRJ_AMOUNT_PUBLIC')); ?>:</b>
	<?php echo CHtml::encode($data->PRJ_AMOUNT_PUBLIC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRJ_SOURCES')); ?>:</b>
	<?php echo CHtml::encode($data->PRJ_SOURCES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRJ_CAT')); ?>:</b>
	<?php echo CHtml::encode($data->PRJ_CAT); ?>
	<br />


</div>