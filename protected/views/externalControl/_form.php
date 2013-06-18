<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'external-control-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<?php echo $form->hiddenField($model,'CTRL_CREATE_DATE'); ?>
	<?php echo $form->hiddenField($model,'CTRL_CREATE_BY'); ?>
	
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
		<div class="input-append date" id="start_date" data-date="<? echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'CTRL_DATE_START'); ?>
		<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		<?php echo $form->error($model,'CTRL_DATE_START',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_DATE_END') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_DATE_END',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="input-append date" id="end_date" data-date="<? echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'CTRL_DATE_END'); ?>
		<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
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

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_FILE_ID') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_FILE_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="alert alert-info">Wrzuć plik na serwer w 
		<strong><a href="<?echo $this->createUrl('/Files/admin');?>" >panelu zarządzania dokumentami</a></strong> z kategorią "Wyniki pokontrolne". Wówczas plik znajdzie się na poniższej liście i będzie można go powiązać z kontrolą zewnętrzną.
		</div>
		<?php echo $form->dropDownList($model, 'CTRL_FILE_ID', CHtml::listData(
			File::model()->findAllByAttributes(array('FIL_CAT'=>FileCategory::ControlResult,'FIL_APP_ID'=>Yii::app()->request->subdomainAppId)), 'FIL_ID', 'FIL_NAME')
			, array('prompt' => '')
			);?>
		<?php //echo $form->textField($model,'CTRL_FILE_ID'); ?>
		<?php echo $form->error($model,'CTRL_FILE_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'CTRL_INFO_CREATE_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_INFO_CREATE_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="input-append date" id="dp_od" data-date="<? echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'CTRL_INFO_CREATE_DATE'); ?>
		<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		<?php echo $form->error($model,'CTRL_INFO_CREATE_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'CTRL_INFO_CREATED_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'CTRL_INFO_CREATED_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_INFO_CREATED_BY'); ?>
		<?php echo $form->error($model,'CTRL_INFO_CREATED_BY',array('class'=>'help-inline')); ?>
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
