<? if (isset($viewed)) : ?>
	<? if ($viewed->INF_BIP == 1): ?> 
		<? $this->renderPartial('//sites/_bip'); ?>
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
	
	<a name="inf_<? echo $viewed->INF_ID; ?>"></a> 
	<h2><? echo $viewed->INF_NAME; ?></h2>
	<? 
	//Brak treści i linków edycji i historii, jeżeli treść jest nullem, nie pusta.
	if ($viewed->INF_CONTENT != null)
	{
		echo "niebrak";
		echo $viewed->INF_CONTENT;
		$this->renderPartial('//information/_history_link', array('data'=>$viewed));
		if (Yii::app()->user->checkAccess('admin'))
			$this->renderPartial('//information/_edit_link', array('id'=>$viewed->INF_ID)); 
	}
	else if (Yii::app()->user->checkAccess('admin') && $viewed->INF_OBLIGATORY == 0)
	{
		$this->renderPartial('//information/_visibility_link', array('id'=>$viewed->INF_ID)); 
	}

	if (count($viewed->Projects) > 0)
		$this->renderPartial('//project/index', array('data'=>$viewed->Projects));
		
	if ($viewed->INF_SHOW_FIN_TYPE != NULL)
		$this->renderPartial('//finance/index', array('data'=>$viewed->Finances,'type'=>$viewed->INF_SHOW_FIN_TYPE));
	
	if (count($viewed->Files) > 0)
		$this->renderPartial('//file/_view_link', array('data'=>$viewed->Files));
		
	if ($viewed->INF_SHOW_CTRL == true)
			$this->renderPartial('//externalControl/index', array('data'=>$viewed->ExternalControls));
	
	$this->renderPartial('//information/_view', array('data'=>$viewed->InformationsLevel0, 'level'=>0));
	?>
	
	</div>

<? endif; ?>
