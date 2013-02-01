<?php
$this->breadcrumbs=array(
	'Finance Histories',
);

$this->menu=array(
	array('label'=>'Create FinanceHistory','url'=>array('create')),
	array('label'=>'Manage FinanceHistory','url'=>array('admin')),
);
?>

<h1>Finance Histories</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
