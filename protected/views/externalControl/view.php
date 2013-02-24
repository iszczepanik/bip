<?php
$this->breadcrumbs=array(
	'External Controls'=>array('index'),
	$model->CTRL_ID,
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
?><h2>ExternalControl - Widok</h2>
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
		'CTRL_ID',
		'CTRL_NAME',
		'CTRL_INSTITUTION',
		'CTRL_DATE_START',
		'CTRL_DATE_END',
		'CTRL_SCOPE',
		'CTRL_FILE_ID',
		'CTRL_CREATE_DATE',
		'CTRL_CREATE_BY',
		'CTRL_MODIFY_DATE',
		'CTRL_MODIFY_BY',
	),
)); ?>
