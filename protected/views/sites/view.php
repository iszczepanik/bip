<? if (isset($viewed)) : ?>
	<? if ($viewed->SIT_BIP == 1): ?> 
		<? $this->renderPartial('//sites/_bip'); ?>
	<? endif; ?>
	<h2 class="<? if ($viewed->INF_VISIBLE_COUNT == 0) echo "muted"; ?>"><? echo $viewed->SIT_NAME; ?></h2>
	<?php $this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
