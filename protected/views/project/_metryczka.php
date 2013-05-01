<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$data,
	'attributes'=>array(
		array(
			'name'=>'Podmiot',
			'value'=>$data->Podmiot,
			'type'=>'html'
		),
		'PRJ_INFO_CREATED_BY',
		'PRJ_INFO_CREATE_DATE',
		array(
			'name'=>'PRJ_CREATE_BY',
			'value'=>$data->CreateBy->WholeName(),
		),
		'PRJ_CREATE_DATE',
	),
)); ?>

