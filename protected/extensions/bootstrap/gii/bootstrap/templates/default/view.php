<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>
?>



<div class="row-fluid">
<div class="span6">
<?php
echo "<?php \$this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?>"; ?>
<h2><?php echo $this->modelClass; ?> - Widok</h2>
</div>
<div class='span6'>
<?php //echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>"; ?>
</div><!-- search-form -->
</div>
</div>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
