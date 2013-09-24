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
		array(
			'name'=>'FIN_AMOUNT',
			'value'=>'$data->AmountFormated',
			'htmlOptions'=>array('style' => 'text-align: right;')
		),
		array(
			'name'=>'FIN_CURRENCY',
			'value'=>'$data->currencyDescription',
		),
	),
)); ?>

</div>
