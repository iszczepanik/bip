<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>

	<?php echo "<?php echo \$form->errorSummary(\$model,null,null,array('class'=>'alert alert-error')); ?>\n"; ?>
	
<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
	$controlGroupClass = "control-group<?php echo (CHtml::error(\$model,'{$column->name}') == '' ? '' : ' error'); ?>";
?>
	<div class='<?php echo $controlGroupClass; ?>'>
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column,"array('class'=>'control-label')")."; ?>\n"; ?>
		<div class="controls">
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}',array('class'=>'help-inline')); ?>\n"; ?>
		</div>
	</div>

<?php
}
?>
	<div class="form-actions">
		<?php echo "<?php \$this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>\$model->isNewRecord ? 'Zapisz' : 'Zapisz Zmiany',
		)); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
