<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'USR_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'USR_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_NAME',array('size'=>16,'maxlength'=>16)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'USR_PASS',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_PASS',array('size'=>16,'maxlength'=>16)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'USR_FIRSTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_FIRSTNAME',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'USR_LASTNAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_LASTNAME',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'USR_EMAIL',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'USR_EMAIL',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary'));
		echo CHtml::link('Zamknij','#',array('class'=>'btn search-button')); ?>
	</div>

<?php $this->endWidget(); ?>
