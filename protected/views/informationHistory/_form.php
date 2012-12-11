<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'information-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'INF_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INF_ID'); ?>
		<?php echo $form->error($model,'INF_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'INF_CONTENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'INF_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'INF_CONTENT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'INF_MODIFY_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INF_MODIFY_DATE'); ?>
		<?php echo $form->error($model,'INF_MODIFY_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'INF_MODIFY_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'INF_MODIFY_BY'); ?>
		<?php echo $form->error($model,'INF_MODIFY_BY',array('class'=>'help-inline')); ?>
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
