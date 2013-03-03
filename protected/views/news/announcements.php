<? $this->renderPartial('//sites/_bip'); ?>
<h2>Ogłoszenia</h2>
<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
