<div class="row-fluid">
<div class="span6">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
),
));
?><h2>Projekty</h2>
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'project-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PRJ_ID',
		'PRJ_NAME',
		'PRJ_AMOUNT_DONATION',
		'PRJ_AMOUNT_PUBLIC',
		'PRJ_SOURCES',
		array(
			'name'=>'PRJ_CAT',
			'value'=>'$data->typeDescription',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
