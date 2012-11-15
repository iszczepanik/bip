<? if (isset($viewed)) : ?>
	<? if ($viewed->SIT_BIP == 1): ?> 
		<img class="pull-right" alt="BIP" src="<?php echo Yii::app()->request->baseUrl; ?>/img/bip.png" />
	<? endif; ?>
	<h2><? echo $viewed->SIT_NAME; ?></h2>
	<?php $this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
