<?php
$this->pageTitle=Yii::app()->name . ' - Login';
?>
<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Logowanie</h2></a>
	</li>
	<li></li>
</ul>


<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div style="height: 70px;">
<?php echo $form->error($model,'username'); ?>
<?php echo $form->error($model,'password'); ?>
<?php echo $form->error($model,'rememberMe'); ?>
</div>

<div class='control-group<?php echo (CHtml::error($model,'username') == '' ? '' : ' error'); ?>'>
	<?php echo $form->labelEx($model,'username',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username',array('class'=>'help-inline')); ?>
		</div>
	</div>

<div class='control-group<?php echo (CHtml::error($model,'password') == '' ? '' : ' error'); ?>'>
	<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password',array('class'=>'help-inline')); ?>
		</div>
	</div>
	
<?php echo $form->checkBox($model,'rememberMe',array('style'=>'display: none;')); ?> 

		
		<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Login',
		)); ?>
	</div>


<?php $this->endWidget(); ?>
