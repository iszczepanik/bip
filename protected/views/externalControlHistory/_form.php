<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'external-control-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'CTRL_HIST_CTRL_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_HIST_CTRL_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_HIST_CTRL_ID'); ?>
		<?php echo $form->error($model,'CTRL_HIST_CTRL_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_YEAR') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_YEAR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_YEAR'); ?>
		<?php echo $form->error($model,'CTRL_YEAR',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_NAME',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'CTRL_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_INSTITUTION') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_INSTITUTION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_INSTITUTION',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'CTRL_INSTITUTION',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_DATE_START') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_DATE_START',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_DATE_START'); ?>
		<?php echo $form->error($model,'CTRL_DATE_START',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_DATE_END') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_DATE_END',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_DATE_END'); ?>
		<?php echo $form->error($model,'CTRL_DATE_END',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_SCOPE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_SCOPE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'CTRL_SCOPE',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CTRL_SCOPE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_MODIFY_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_MODIFY_DATE'); ?>
		<?php echo $form->error($model,'CTRL_MODIFY_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_MODIFY_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_MODIFY_BY'); ?>
		<?php echo $form->error($model,'CTRL_MODIFY_BY',array('class'=>'help-inline')); ?>
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
