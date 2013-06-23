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
		//'PRJ_AMOUNT_DONATION',
		array(
			'name'=>'PRJ_AMOUNT_DONATION',
			'value'=>function($data){
					return number_format($data->PRJ_AMOUNT_DONATION, 2, ',', '');
				},
			'htmlOptions'=>array('style' => 'text-align: right;')
		),
		//'PRJ_AMOUNT_PUBLIC',
		array(
			'name'=>'PRJ_AMOUNT_PUBLIC',
			'value'=>function($data){
					return number_format($data->PRJ_AMOUNT_PUBLIC, 2, ',', '');
				},
			'htmlOptions'=>array('style' => 'text-align: right;')
		),
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
