<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'file-attachment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'fil_atch_fil_id') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'fil_atch_fil_id',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_fil_id'); ?>
		<?php echo $form->error($model,'fil_atch_fil_id',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'fil_atch_entity_id') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'fil_atch_entity_id',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_entity_id'); ?>
		<?php echo $form->error($model,'fil_atch_entity_id',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'fil_atch_entity_type') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'fil_atch_entity_type',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fil_atch_entity_type'); ?>
		<?php echo $form->error($model,'fil_atch_entity_type',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
