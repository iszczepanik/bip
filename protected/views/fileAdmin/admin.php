<?php
$this->breadcrumbs=array(
	'Files'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('file-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
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
?><h2>Dokumenty - Lista</h2>
</div>
<div class='span6'>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?></div><!-- search-form -->
</div>
</div>

<!--<style>
.grid-view .button-column { width: 70px; }
</style>-->

<?php $this->widget('bootstrap.widgets.BootGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'file-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FIL_ID',
		'FIL_NAME',
		//'FIL_CAT',
		array(
			'name'=>'FIL_CAT',
			'value'=>'$data->CategoryDescription',
		),
		/*'FIL_CONTENT',
		'FIL_CREATE_DATE',
		'FIL_CREATE_BY',
		'FIL_MODIFY_DATE',
		'FIL_MODIFY_BY',
		*/
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			/*'template'=>'{upload} {update} {view} {delete} ',
			'buttons'=>array
			(
				'upload' => array
				(
					'url'=>'Yii::app()->createUrl("fileAdmin/upload", array("id"=>$data->FIL_ID))',

				),
			),*/
		),
	),
)); ?>
