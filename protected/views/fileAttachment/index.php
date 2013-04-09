<?php
$this->breadcrumbs=array(
	'File Attachments',
);

$this->menu=array(
	array('label'=>'Create FileAttachment','url'=>array('create')),
	array('label'=>'Manage FileAttachment','url'=>array('admin')),
);
?>

<h1>File Attachments</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
