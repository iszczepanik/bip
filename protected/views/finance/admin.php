<?php
$this->breadcrumbs=array(
	'Finances'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('finance-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row-fluid">
<div class="span6">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?><h2>Finansowanie - Lista</h2>
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'finance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FIN_ID',
		//'FIN_TYPE',
		array(
			'name'=>'FIN_TYPE',
			'value'=>'$data->typeDescription',
		),
		array(
			'name'=>'FIN_SOURCE',
			'value'=>'$data->sourceDescription',
		),
		//'FIN_SOURCE',
		'FIN_YEAR',
		'FIN_AMOUNT',
		'FIN_FROM',
		//'FIN_PRJ_ID',
		array(
			'name'=>'FIN_PRJ_ID',
			'value'=>'$data->Project->PRJ_NAME',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
		),
	),
)); ?>
