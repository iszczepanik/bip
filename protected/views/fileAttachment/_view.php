<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fil_atch_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fil_atch_id),array('view','id'=>$data->fil_atch_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fil_atch_fil_id')); ?>:</b>
	<?php echo CHtml::encode($data->fil_atch_fil_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fil_atch_entity_id')); ?>:</b>
	<?php echo CHtml::encode($data->fil_atch_entity_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fil_atch_entity_type')); ?>:</b>
	<?php echo CHtml::encode($data->fil_atch_entity_type); ?>
	<br />


</div>