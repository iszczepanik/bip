<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_HIST_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_HIST_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_HIST_FIN_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_HIST_FIN_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_AMOUNT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_AMOUNT'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_MODIFY_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'FIN_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'FIN_MODIFY_BY'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
