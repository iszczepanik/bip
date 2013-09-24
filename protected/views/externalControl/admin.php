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
?><h2>Kontrole zewnętrzne - Lista</h2>
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'external-control-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CTRL_ID',
		'CTRL_NAME',
		'CTRL_INSTITUTION',
		'CTRL_DATE_START',
		'CTRL_DATE_END',
		/*'CTRL_SCOPE',
		'CTRL_FILE_ID',
		'CTRL_CREATE_DATE',
		'CTRL_CREATE_BY',
		'CTRL_MODIFY_DATE',
		'CTRL_MODIFY_BY',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
