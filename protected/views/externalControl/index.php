<p></p>
<? $year = 9999; ?>
<? foreach ($data as $control): ?>

	
	<? if ($control->CTRL_YEAR < $year): ?>
		<? $year = $control->CTRL_YEAR; ?>
		<h3 class="year"><? echo $control->CTRL_YEAR; ?></h3>
	<? endif; 
	?><a name="ctrl_<? echo $control->CTRL_ID; ?>"></a> <?
	$this->renderPartial('//externalControl/_view', array('data'=>$control));
	
	$this->renderPartial('//externalControl/_history_link', array('data'=>$control));
	if (Yii::app()->user->checkAccess('admin'))
	{
		$this->renderPartial('//externalControl/_edit_link', array('id'=>$control->CTRL_ID));
	}
	
	if ($control->File != null)
		$this->renderPartial('//file/_view_link', array('data'=>array($control->File)));
	
	?>
	
<? endforeach; ?>


<p></p>
<? 
if (Yii::app()->user->checkAccess('admin')) :
?>
<br />
<div class="block_link right" >
<a href="<?php echo $this->createUrl('/externalControl/create'); ?>">
	<i class="icon-plus-sign"></i>Dodaj nową kontrolę
</a>
<a class="block right" href="<?php echo $this->createUrl('/externalControl/admin'); ?>">
	<i class="icon-search"></i><i class="icon-pencil"></i><i class="icon-trash"></i>Panel administracyjny (wyszukiwanie, edycja, usuwanie)
</a>
</div>
<? endif; ?>
