<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

	<div class='control-group'>
		<?php echo $form->labelEx($model,'NWS_BIP',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->checkBox($model,'NWS_BIP', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'NWS_BIP',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
	<div class='control-group<?php echo (CHtml::error($model,'NWS_TITLE') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_TITLE',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'NWS_TITLE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'NWS_TITLE',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<div class='control-group<?php echo (CHtml::error($model,'NWS_CONTENT') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'NWS_CONTENT',array('class'=>'control-label')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('model'=>$model, 'attribute'=>'NWS_CONTENT', 'id'=>'INF_CONTENT', )); ?>
		<?php echo $form->error($model,'NWS_CONTENT',array('class'=>'help-inline')); ?>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
