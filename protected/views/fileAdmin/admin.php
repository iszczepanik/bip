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
?><h2>Dokumenty - Lista</h2>
</div>
</div>
<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'file-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FIL_ID',
		'FIL_NAME',
		//'FIL_CAT',
		array(
			'name'=>'FIL_CAT',
			'value'=>'$data->CategoryDescription',
		),
		/*'FIL_CONTENT',
		'FIL_CREATE_DATE',
		'FIL_CREATE_BY',
		'FIL_MODIFY_DATE',
		'FIL_MODIFY_BY',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
