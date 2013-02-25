<h2>Wyniki wyszukiwania dla<div><small>"<? echo $phrase;?>"</small></div></h2>


<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_searchResultView',
)); ?>