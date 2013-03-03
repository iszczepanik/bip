<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$data,
	'attributes'=>array(
		array(
			'name'=>'Podmiot',
			'value'=>$data->Podmiot,
		),
		'CTRL_INFO_CREATED_BY',
		'CTRL_INFO_CREATE_DATE',
		array(
			'name'=>'CTRL_CREATE_BY',
			'value'=>$data->CreateBy->WholeName(),
		),
		'CTRL_CREATE_DATE',
	),
)); ?>

