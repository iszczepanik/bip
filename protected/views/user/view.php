<div class="row-fluid">
<div class="span6">
<?php
$this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
array('label'=>'Nowy', 'icon'=>'plus-sign', 'url'=>array('create')),
),
));
?>
<h2>Użytkownik - Widok</h2>
</div>
</div>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'USR_ID',
		'USR_NAME',
		'USR_PASS',
		'USR_FIRSTNAME',
		'USR_LASTNAME',
		'USR_EMAIL',
	),
)); ?>
