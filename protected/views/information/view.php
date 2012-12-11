<? if (isset($viewed)) : ?>
	<? if ($viewed->INF_BIP == 1): ?> 
		<img class="pull-right" alt="BIP" src="<?php echo Yii::app()->request->baseUrl; ?>/img/bip.png" />
	<? endif; ?>
	<?
	$class = '';
		if ($viewed->INF_SHOW == 0)
			if (Yii::app()->user->checkAccess('admin'))
				$class = 'muted';
			else
				$class = 'display-none';
	?>
	
	<div class="<? echo $class; ?>" >

	<h2><? echo $viewed->INF_NAME; ?></h2>
	<? 
	echo $viewed->INF_CONTENT;
	$this->renderPartial('//information/_history_link', array('data'=>$viewed));
	if (Yii::app()->user->checkAccess('admin'))
		$this->renderPartial('//information/_edit_link', array('id'=>$viewed->INF_ID)); 

	if (count($viewed->Projects) > 0)
		$this->renderPartial('//project/index', array('data'=>$viewed->Projects));
	
	if (count($viewed->Files) > 0)
		$this->renderPartial('//file/_view_link', array('data'=>$viewed->Files));
	
	$this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0));
	?>
	
	</div>

<? endif; ?>
