<?php
$this->breadcrumbs=array(
	'External Control Histories',
);

$this->menu=array(
	array('label'=>'Create ExternalControlHistory','url'=>array('create')),
	array('label'=>'Manage ExternalControlHistory','url'=>array('admin')),
);
?>

<h1>External Control Histories</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
