<? if (isset($viewed)) : ?>

	<h2><? echo $viewed->INF_NAME; ?></h2>
	<? echo $viewed->INF_CONTENT; ?>
	<?php $this->renderPartial('_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0))?>

<? endif; ?>
