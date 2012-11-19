<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->PRJ_ID,
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
?><h2>Projekt - Widok</h2>
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
		'PRJ_ID',
		'PRJ_NAME',
		'PRJ_DESCRIPTION',
		'PRJ_SHORT_DESCRIPTION',
		'PRJ_AMOUNT_DONATION',
		'PRJ_AMOUNT_PUBLIC',
		'PRJ_SOURCES',
		array(
			'name'=>'PRJ_CAT',
			'value'=>$model->typeDescription,
		),
	),
)); ?>
