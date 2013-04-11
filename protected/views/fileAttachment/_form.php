<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'file-attachment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>
	
	<div class='control-group<?php echo (CHtml::error($model,'fil_atch_fil_id') == '' ? '' : ' error'); ?>'>
		<?php echo $form->labelEx($model,'fil_atch_fil_id',array('class'=>'control-label')); ?>
		<div class="controls">
		<div class="alert alert-info">Wrzuć plik na serwer w 
		<strong><a href="<?echo $this->createUrl('/Files/admin');?>" >panelu zarządzania dokumentami</a></strong> z kategorią "Projekty". Wówczas plik znajdzie się na poniższej liście i będzie można go powiązać z kontrolą zewnętrzną.
		</div>
		<?php echo $form->dropDownList($model, 'fil_atch_fil_id', CHtml::listData(
			File::model()->findAllByAttributes(array('FIL_CAT'=>FileCategory::Projects)), 'FIL_ID', 'FIL_NAME')
			, array('prompt' => '')
			);?>
		<?php echo $form->error($model,'fil_atch_fil_id',array('class'=>'help-inline')); ?>
		</div>
	</div>

	<?php echo $form->hiddenField($model,'fil_atch_entity_id'); ?>
	<?php echo $form->hiddenField($model,'fil_atch_entity_type'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
