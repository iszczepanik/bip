<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'file-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<!--<div class='control-group<?php echo (CHtml::error($model,'FIL_NAME') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIL_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_NAME',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'FIL_NAME',array('class'=>'help-inline')); ?>
		</div>
	</div>-->

	<div class='control-group<?php echo (CHtml::error($model,'FIL_CAT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIL_CAT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'FIL_CAT', 
			FileCategory::GetFileCategoryArray()
			); ?>
		<?php echo $form->error($model,'FIL_CAT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'uploadedFile') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'uploadedFile',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->fileField($model,'uploadedFile'); ?>
		<?php echo $form->error($model,'uploadedFile',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<!--
	<div class='control-group<?php echo (CHtml::error($model,'FIL_CREATE_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIL_CREATE_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_CREATE_DATE'); ?>
		<?php echo $form->error($model,'FIL_CREATE_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIL_CREATE_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIL_CREATE_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_CREATE_BY'); ?>
		<?php echo $form->error($model,'FIL_CREATE_BY',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIL_MODIFY_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIL_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_MODIFY_DATE'); ?>
		<?php echo $form->error($model,'FIL_MODIFY_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIL_MODIFY_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIL_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_MODIFY_BY'); ?>
		<?php echo $form->error($model,'FIL_MODIFY_BY',array('class'=>'help-inline')); ?>
		</div>
	</div>
	-->
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
