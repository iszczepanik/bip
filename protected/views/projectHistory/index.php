<?php
$this->breadcrumbs=array(
	'Project Histories',
);

$this->menu=array(
	array('label'=>'Create ProjectHistory','url'=>array('create')),
	array('label'=>'Manage ProjectHistory','url'=>array('admin')),
);
?>

<h1>Project Histories</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
