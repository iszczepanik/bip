<div id="rejestr-zmian-file-<? echo $data->FIL_ID; ?>-grid" style="display: none;" >



<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'file-history-grid',
	'dataProvider'=>$data->HistoryProvider,
	//'filter'=>$model,
	'columns'=>array(
		'FIL_MODIFY_DATE',
		array(
			'name'=>'FIL_MODIFY_BY',
			'value'=>'$data->ModifyBy->WholeName()',
		),
		'FIL_NAME',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'template'=>'{history}',
			'buttons'=>array
			(
				'history' => array
				(
					'label'=>'Zobacz tę wersję',
					'url'=>'Yii::app()->createUrl("fileHistory/view", array("id"=>$data->FIL_HIST_ID))',
					'target'=>"blank"
				),
			),
		),
	),
)); ?>

</div>