<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'NWS_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'NWS_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'NWS_TITLE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_TITLE',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'NWS_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'NWS_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
