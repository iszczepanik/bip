<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_HIST_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_HIST_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_HIST_CTRL_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_HIST_CTRL_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_YEAR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_YEAR'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_NAME',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_INSTITUTION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_INSTITUTION',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_DATE_START',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_DATE_START'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_DATE_END',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_DATE_END'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_SCOPE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'CTRL_SCOPE',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_MODIFY_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'CTRL_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'CTRL_MODIFY_BY'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
