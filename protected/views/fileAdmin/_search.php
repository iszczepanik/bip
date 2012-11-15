<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_NAME',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_CAT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_CAT'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_CONTENT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_CONTENT'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_CREATE_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_CREATE_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_CREATE_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_CREATE_BY'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_MODIFY_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIL_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIL_MODIFY_BY'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
