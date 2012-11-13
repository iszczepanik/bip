<ul class="nav nav-list">
<li class="nav-header">BIP - Informacje</li>
<? foreach ($data as $item) : ?>
<li><a href="<? echo  $this->createUrl('Sites/view', array('id' => $item->SIT_ID)); ?>"><?  echo $item->SIT_NAME; ?></a></li>

<? 
if (count($item->InformationsExternal) > 0) 
{	
	foreach ($item->InformationsExternal as $subitem) : ?>
	
		<li class="subitem" >
			<a href="<? echo  $this->createUrl('Information/view', array('id' => $subitem->INF_ID)); ?>">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/arrow.png" />
				<? echo $subitem->INF_NAME; ?>
			</a>
		</li>
	
	<? endforeach;
}
	
endforeach; ?>
</ul>