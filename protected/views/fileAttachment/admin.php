<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
array('label'=>'Przypnij dokument', 'icon'=>'plus-sign', 'url'=>$this->createUrl('fileAttachment/create', array('id'=>$model->PRJ_ID))),
),
));
?>

<h2>Dokumenty w projekcie <? echo $model->PRJ_NAME; ?></h2>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'file-attachment-grid',
	'dataProvider'=>$provider,
	//'filter'=>$model,
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
