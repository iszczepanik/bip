<?php
$this->breadcrumbs=array(
	'File Histories',
);

$this->menu=array(
	array('label'=>'Create FileHistory','url'=>array('create')),
	array('label'=>'Manage FileHistory','url'=>array('admin')),
);
?>

<h1>File Histories</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
