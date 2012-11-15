<?php
$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->FIL_ID,
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
?><h2>Dokument - Widok</h2>
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
		'FIL_ID',
		'FIL_NAME',
		//'FIL_CAT',
		array(
			'name'=>'FIL_CAT',
			'value'=>$model->CategoryDescription,
		),
		/*'FIL_CONTENT',
		'FIL_CREATE_DATE',
		'FIL_CREATE_BY',
		'FIL_MODIFY_DATE',
		'FIL_MODIFY_BY',*/
	),
)); ?>
