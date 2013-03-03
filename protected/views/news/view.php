<? if ($model->NWS_BIP == 1): ?> 
	<? $this->renderPartial('//sites/_bip'); ?>
	<h2>Ogłoszenia</h2>
<? else: ?>
	<h2>Aktualności</h2>
<? endif; ?>
<? $this->renderPartial('_view', array('data'=>$model)); ?>