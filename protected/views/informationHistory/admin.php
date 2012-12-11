<div id="rejestr-zmian-<? echo $data->INF_ID; ?>-grid" style="display: none;" >

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'information-history-grid',
	'dataProvider'=>$data->HistoryProvider,
	//'filter'=>$model,
	'columns'=>array(
		'INF_MODIFY_DATE',
		array(
			'name'=>'INF_MODIFY_BY',
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
					'url'=>'Yii::app()->createUrl("InformationHistory/viewInModal", array("id"=>$data->INF_HIST_ID))',
					'data-toggle'=>"modal"
				),
			),
		),
	),
)); ?>

</div>

