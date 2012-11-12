<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'htmlOptions' => array('style' => 'margin-top: 15px;'),
	'method'=>'get',
)); ?>\n"; ?>

<?php foreach($this->tableSchema->columns as $column): ?>
<?php
	$field=$this->generateInputField($this->modelClass,$column);
	if(strpos($field,'password')!==false)
		continue;
?>
	<div class="control-group">
		<?php echo "<?php echo \$form->label(\$model,'{$column->name}',array('class'=>'control-label')); ?>\n"; ?>
		<div class="controls">
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		</div>
	</div>

<?php endforeach; ?>
	<div class="form-actions">
		<?php echo "<?php echo CHtml::submitButton('Szukaj',array('class'=>'btn btn-primary')); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>