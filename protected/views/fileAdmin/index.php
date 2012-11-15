<?php
$this->breadcrumbs=array(
	'Files',
);

$this->menu=array(
	array('label'=>'Create File','url'=>array('create')),
	array('label'=>'Manage File','url'=>array('admin')),
);
?>

<h1>Files</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
