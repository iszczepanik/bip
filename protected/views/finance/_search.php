<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_TYPE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_TYPE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_SOURCE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_SOURCE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_YEAR',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_YEAR'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_AMOUNT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_AMOUNT'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_FROM',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_FROM',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_PRJ_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_PRJ_ID'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
