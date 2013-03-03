<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'PRJ_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_NAME',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'PRJ_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'PRJ_DESCRIPTION') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_DESCRIPTION',array('class'=>'control-label')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'PRJ_DESCRIPTION', 'id'=>'PRJ_DESCRIPTION', )); ?>
		<?php echo $form->error($model,'PRJ_DESCRIPTION',array('class'=>'help-inline')); ?>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'PRJ_SHORT_DESCRIPTION') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_SHORT_DESCRIPTION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'PRJ_SHORT_DESCRIPTION',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'PRJ_SHORT_DESCRIPTION',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'PRJ_AMOUNT_DONATION') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_AMOUNT_DONATION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_AMOUNT_DONATION'); ?>
		<?php echo $form->error($model,'PRJ_AMOUNT_DONATION',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'PRJ_AMOUNT_PUBLIC') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_AMOUNT_PUBLIC',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_AMOUNT_PUBLIC'); ?>
		<?php echo $form->error($model,'PRJ_AMOUNT_PUBLIC',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'PRJ_SOURCES') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_SOURCES',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_SOURCES',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'PRJ_SOURCES',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'PRJ_CAT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_CAT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php //echo $form->textField($model,'PRJ_CAT'); ?>
		<?php echo $form->dropDownList($model, 'PRJ_CAT', 
			ProjectType::GetProjectTypeArray()
			); ?>
		<?php echo $form->error($model,'PRJ_CAT',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'PRJ_INFO_CREATE_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_INFO_CREATE_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_INFO_CREATE_DATE'); ?>
		<?php echo $form->error($model,'PRJ_INFO_CREATE_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'PRJ_INFO_CREATED_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'PRJ_INFO_CREATED_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_INFO_CREATED_BY'); ?>
		<?php echo $form->error($model,'PRJ_INFO_CREATED_BY',array('class'=>'help-inline')); ?>
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
