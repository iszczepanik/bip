<div class="row-fluid">
<div class="span6">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
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
		array(
			'name'=>'FIN_TYPE',
			'value'=>'$data->typeDescription',
		),
		array(
			'name'=>'FIN_SOURCE',
			'value'=>'$data->sourceDescription',
		),
		'FIN_YEAR',
		'FIN_AMOUNT',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
