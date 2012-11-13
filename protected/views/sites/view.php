<? if (isset($viewed)) : ?>

	<h2><? echo $viewed->SIT_NAME; ?></h2>
	<?php $this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
