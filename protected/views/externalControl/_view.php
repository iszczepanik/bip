<div>
	<h3><?php echo CHtml::encode($data->CTRL_NAME); ?></h3>

	<strong><?php echo CHtml::encode($data->getAttributeLabel('CTRL_INSTITUTION')); ?>:</strong>
	<?php echo CHtml::encode($data->CTRL_INSTITUTION); ?>
	<br />

	<strong>Data kontroli:</strong>
	<?php echo CHtml::encode($data->CTRL_DATE_START)." - ".CHtml::encode($data->CTRL_DATE_END); ?>
	<br />

	<strong><?php echo CHtml::encode($data->getAttributeLabel('CTRL_SCOPE')); ?>:</strong>
	<?php echo CHtml::encode($data->CTRL_SCOPE); ?>
	<br />
</div>
