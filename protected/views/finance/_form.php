<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'finance-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'FIN_TYPE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_TYPE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'FIN_TYPE', 
			FinanceType::GetFinanceTypeArray(),array("disabled"=>"disabled")
			); ?>
		<?php echo $form->error($model,'FIN_TYPE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_SOURCE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_SOURCE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'FIN_SOURCE', 
			FinanceSource::GetFinanceSourceArray(),array("disabled"=>"disabled")
			); ?>
		<?php echo $form->error($model,'FIN_SOURCE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_YEAR') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_YEAR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_YEAR'); ?>
		<?php echo $form->error($model,'FIN_YEAR',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_AMOUNT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_AMOUNT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php $model->FIN_AMOUNT = number_format($model->FIN_AMOUNT, 2, ',', ''); ?>
		<?php echo $form->textField($model,'FIN_AMOUNT'); ?>
		<?php echo $form->error($model,'FIN_AMOUNT',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<? if ($model->FIN_SOURCE == FinanceSource::Project) : ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'FIN_FROM') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_FROM',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_FROM',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'FIN_FROM',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_PRJ_ID') == '' ? '' : ' error'); ?>'>
		<?php echo CHtml::label($model->getAttributeLabel('FIN_PRJ_ID'),'FIN_PRJ_ID',array('class'=>'control-label','required'=>'required')); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model, 'FIN_PRJ_ID', CHtml::listData(
			Project::model()->findAll("PRJ_APP_ID=".Yii::app()->request->subdomainAppId), 'PRJ_ID', 'PRJ_NAME')
			, array('prompt' => '')
			);?>
		<?php echo $form->error($model,'FIN_PRJ_ID',array('class'=>'help-inline')); ?>
		</div>
	</div>
	

	
	<? else: ?>
		<?php //echo $form->hiddenField($model,'FIN_FROM',array('size'=>60,'maxlength'=>256)); ?>
	<? endif; ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'FIN_INFO_CREATE_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_INFO_CREATE_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="input-append date" id="dp_od" data-date="<? echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'FIN_INFO_CREATE_DATE'); ?>
		<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		<?php echo $form->error($model,'FIN_INFO_CREATE_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'FIN_INFO_CREATED_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'FIN_INFO_CREATED_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="input-append" >
		<?php echo $form->textField($model,'FIN_INFO_CREATED_BY'); ?>
		<span class="add-on set-user-name" title="Wstaw moje nazwisko"
			onclick='$("#Finance_FIN_INFO_CREATED_BY").val("<? echo Yii::app()->user->UserWholeName;?>");' >
		<i class="icon-user"></i></span>
		</div>
		<?php echo $form->error($model,'FIN_INFO_CREATED_BY',array('class'=>'help-inline')); ?>
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
