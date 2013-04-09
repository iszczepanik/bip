<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'fil_atch_id',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_id'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fil_atch_fil_id',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_fil_id'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fil_atch_entity_id',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_entity_id'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fil_atch_entity_type',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_entity_type'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
