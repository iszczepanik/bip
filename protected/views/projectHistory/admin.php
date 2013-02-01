<div id="rejestr-zmian-prj-<? echo $data->PRJ_ID; ?>-grid" style="display: none;" >

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'project-history-grid',
	'dataProvider'=>$data->HistoryProvider,
	//'filter'=>$model,
	'columns'=>array(
		'PRJ_MODIFY_DATE',
		array(
			'name'=>'PRJ_MODIFY_BY',
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
					'url'=>'Yii::app()->createUrl("ProjectHistory/viewInModal", array("id"=>$data->PRJ_HIST_ID))', 
					'data-toggle'=>"modal"
				),
			),
		),
	),
)); ?>

</div>
