<? if (isset($viewed)) : ?>
	<? if ($viewed->SIT_BIP == 1): ?> 
		<a href="http://www.bip.gov.pl/" target="_blank" ><img class="pull-right" alt="BIP" src="<?php echo Yii::app()->request->baseUrl; ?>/img/bip.png" /></a>
	<? endif; ?>
	<h2><? echo $viewed->SIT_NAME; ?></h2>
	<?php $this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
