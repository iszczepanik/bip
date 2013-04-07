<div class="row-fluid">
<div class="span6">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'tabs',
    'items'=>array(
//array('label'=>'LIST HEADER'),
array('label'=>'Lista', 'icon'=>'th-list', 'url'=>array('admin')),
),
));
?><h2>Finansowanie - Edycja</h2>
</div>
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>