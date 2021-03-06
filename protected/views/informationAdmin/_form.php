<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'information-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	<?php echo $form->hiddenField($model,'INF_NAME'); ?>
	<?php echo $form->hiddenField($model,'INF_BIP'); ?>
	<?php echo $form->hiddenField($model,'INF_OBLIGATORY'); ?>
	<?php echo $form->hiddenField($model,'INF_SIT_ID'); ?>
	<?php echo $form->hiddenField($model,'INF_TYPE'); ?>
	<?php echo $form->hiddenField($model,'INF_INF_ID'); ?>
	<?php echo $form->hiddenField($model,'INF_CREATE_DATE'); ?>
	<?php echo $form->hiddenField($model,'INF_CREATE_BY'); ?>

	<? if ($model->INF_OBLIGATORY == 0) :?>
	<div class='control-group<?php //echo (CHtml::error($model,'INF_SHOW') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_SHOW'); ?>
		<?php echo $form->checkBox($model,'INF_SHOW', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'INF_SHOW',array('class'=>'help-inline')); ?>
	</div>
	<? endif; ?>
	<? if ($model->INF_CONTENT != null) : ?>
	<div class='control-group<?php echo (CHtml::error($model,'INF_CONTENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_CONTENT'); ?>
		<?php //echo $form->textArea($model,'INF_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'INF_CONTENT', 'id'=>'INF_CONTENT', )); ?>
		<?php echo $form->error($model,'INF_CONTENT',array('class'=>'help-inline')); ?>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'INF_INFO_CREATE_DATE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_INFO_CREATE_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="input-append date" id="dp_od" data-date="<? echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd">
		<?php echo $form->textField($model,'INF_INFO_CREATE_DATE'); ?>
		<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		<?php echo $form->error($model,'INF_INFO_CREATE_DATE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'INF_INFO_CREATED_BY') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'INF_INFO_CREATED_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="input-append" >
		<?php echo $form->textField($model,'INF_INFO_CREATED_BY'); ?>
		<span class="add-on set-user-name" title="Wstaw moje nazwisko"
			onclick='$("#Information_INF_INFO_CREATED_BY").val("<? echo Yii::app()->user->UserWholeName;?>");' >
		<i class="icon-user"></i></span>
		</div>
		<?php echo $form->error($model,'INF_INFO_CREATED_BY',array('class'=>'help-inline')); ?>
		</div>
	</div>
	<? endif; ?>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
