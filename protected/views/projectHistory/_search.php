<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_HIST_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_HIST_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_HIST_PRJ_ID',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_HIST_PRJ_ID'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_NAME',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_NAME',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_DESCRIPTION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_DESCRIPTION',array('size'=>60,'maxlength'=>512)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_SHORT_DESCRIPTION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_SHORT_DESCRIPTION',array('size'=>60,'maxlength'=>256)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_AMOUNT_DONATION',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_AMOUNT_DONATION'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_AMOUNT_PUBLIC',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_AMOUNT_PUBLIC'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_SOURCES',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_SOURCES',array('size'=>60,'maxlength'=>512)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_CAT',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_CAT'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_MODIFY_DATE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_MODIFY_DATE'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PRJ_MODIFY_BY',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'PRJ_MODIFY_BY'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
