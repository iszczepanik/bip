<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$data,
	'attributes'=>array(
		array(
			'name'=>'Podmiot',
			'value'=>$data->Podmiot,
		),
		'FIL_INFO_CREATED_BY',
		'FIL_INFO_CREATEDATE',
		array(
			'name'=>'FIL_CREATE_BY',
			'value'=>$data->CreateBy->WholeName(),
		),
		'FIL_CREATE_DATE',
	),
)); ?>

