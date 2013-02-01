<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'finance-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'FIN_HIST_FIN_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_HIST_FIN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_HIST_FIN_ID'); ?>
		<?php echo $form->error($model,'FIN_HIST_FIN_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_AMOUNT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_AMOUNT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_AMOUNT'); ?>
		<?php echo $form->error($model,'FIN_AMOUNT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_MODIFY_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_MODIFY_DATE'); ?>
		<?php echo $form->error($model,'FIN_MODIFY_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_MODIFY_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_MODIFY_BY'); ?>
		<?php echo $form->error($model,'FIN_MODIFY_BY',array('class'=>'help-inline')); ?>
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
