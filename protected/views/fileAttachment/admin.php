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
?><h2>Dokumenty w projekcie - Lista</h2>
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'file-attachment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'fil_atch_id',
		array(
			'name'=>'fil_atch_fil_id',
			'value'=>'$data->File->FIL_NAME',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{delete}',
		),
	),
)); ?>
