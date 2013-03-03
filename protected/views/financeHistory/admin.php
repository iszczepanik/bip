<div id="rejestr-zmian-finance-<? echo $data->FIN_ID; ?>-grid" style="display: none;" >

<? $this->renderPartial('//finance/_metryczka', array('data'=>$data)); ?>

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'finance-history-grid',
	'dataProvider'=>$data->HistoryProvider,
	//'filter'=>$model,
	'columns'=>array(
		'FIN_MODIFY_DATE',
		array(
			'name'=>'FIN_MODIFY_BY',
			'value'=>'$data->ModifyBy->WholeName()',
		),
		'FIN_AMOUNT',
	),
)); ?>

</div>
