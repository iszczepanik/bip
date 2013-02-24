<div id="rejestr-zmian-ctrl-<? echo $data->CTRL_ID; ?>-grid" style="display: none;" >

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'control-history-grid',
	'dataProvider'=>$data->HistoryProvider,
	//'filter'=>$model,
	'columns'=>array(
		'CTRL_MODIFY_DATE',
		array(
			'name'=>'CTRL_MODIFY_BY',
			'value'=>'$data->ModifyBy->WholeName()',
		),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{history}',
			'buttons'=>array
			(
				'history' => array
				(
					'label'=>'Zobacz tę wersję',
					'url'=>'Yii::app()->createUrl("ExternalControlHistory/viewInModal", array("id"=>$data->CTRL_HIST_ID))', 
					'data-toggle'=>"modal"
				),
			),
		),
	),
)); ?>

</div>