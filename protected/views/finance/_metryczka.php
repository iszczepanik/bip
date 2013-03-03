<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$data,
	'attributes'=>array(
		array(
			'name'=>'Podmiot',
			'value'=>$data->Podmiot,
		),
		'FIN_INFO_CREATED_BY',
		'FIN_INFO_CREATE_DATE',
		array(
			'name'=>'FIN_CREATE_BY',
			'value'=>$data->CreateBy->WholeName(),
		),
		'FIN_CREATE_DATE',
	),
)); ?>

