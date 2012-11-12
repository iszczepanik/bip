<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'USR_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'USR_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_NAME',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'USR_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'USR_PASS') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'USR_PASS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_PASS',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'USR_PASS',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'USR_FIRSTNAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'USR_FIRSTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_FIRSTNAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USR_FIRSTNAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'USR_LASTNAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'USR_LASTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_LASTNAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USR_LASTNAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'USR_EMAIL') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'USR_EMAIL',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_EMAIL',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USR_EMAIL',array('class'=>'help-inline')); ?>
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
