<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$data,
	'attributes'=>array(
		array(
			'name'=>'Podmiot',
			'value'=>$data->Podmiot,
			'type'=>'html'
		),
		'INF_INFO_CREATED_BY',
		'INF_INFO_CREATE_DATE',
		array(
			'name'=>'INF_CREATE_BY',
			'value'=>$data->CreateBy->WholeName(),
		),
		'INF_CREATE_DATE',
	),
)); ?>

