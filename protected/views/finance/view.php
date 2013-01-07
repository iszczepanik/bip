<?php
$this->breadcrumbs=array(
	'Finances'=>array('index'),
	$model->FIN_ID,
);
?>



<div class="row-fluid">
<div class="span6">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
array('label'=>'Wyszukiwanie zaawansowane', 'icon'=>'search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
),
));
?><h2>Finansowanie - Widok</h2>
</div>
<div class='span6'>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?></div><!-- search-form -->
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'FIN_ID',
		//'FIN_TYPE',
		array(
			'name'=>'FIN_TYPE',
			'value'=>$model->typeDescription,
		),
		//'FIN_SOURCE',
		array(
			'name'=>'FIN_SOURCE',
			'value'=>$model->sourceDescription,
		),
		'FIN_YEAR',
		'FIN_AMOUNT',
		'FIN_FROM',
		//'FIN_PRJ_ID',
		array(
			'name'=>'FIN_PRJ_ID',
			'value'=>$model->Project->PRJ_NAME,
		),
	),
)); ?>
