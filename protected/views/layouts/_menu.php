<br />
<ul class="nav nav-list">
<li><a href="<? echo  $this->createUrl('Site/search'); ?>"><i class="icon-search"></i> Szukaj</a></li>
<? foreach ($data as $item) : ?>
<? //echo var_dump($item); ?>
<? if ($item->SIT_NAME == "Aktualności") : ?>
	<? if (News::GetNewsCount() > 0): ?>
		<li><a href="<? echo  $this->createUrl('News/index'); ?>"><?  echo $item->SIT_NAME; ?></a></li>
	<? endif; ?>
<? else : ?>
	<? if (count($item->InformationsExternal) > 0) : ?>
		<li class="disabled" ><a href="#"  ><?  echo $item->SIT_NAME; ?></a></li>
	<? else : ?>
		<li><a href="<? echo $this->createUrl('Sites/view', array('id' => $item->SIT_ID)); ?>"><?  echo $item->SIT_NAME; ?></a></li>
	<? endif; ?>
<? endif; ?>

<? 
if (count($item->InformationsExternal) > 0) 
{	
	foreach ($item->InformationsExternal as $subitem) : ?>
	
		<?
		$class = '';
		if ($subitem->INF_SHOW == 0)
			if (Yii::app()->user->checkAccess('admin'))
				$class = 'muted';
			else
				$class = 'display-none';
		?>
	
		<li class="subitem <? echo $class; ?>" >
			<a class="<? echo $class; ?>" href="<? echo  $this->createUrl('Information/view', array('id' => $subitem->INF_ID)); ?>">
				<? if ($contrast != 'high'): ?>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/arrow.png" />
				<? endif; ?>
				<? echo $subitem->INF_NAME; ?>
			</a>
		</li>
	
	<? endforeach;
}
	
endforeach; ?>
</ul>