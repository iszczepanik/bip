<p></p>
<? $year = 9999; $projects = false; //$type = ''; ?>
<? foreach ($data as $finance): ?>
	<? //$type = $finance->FIN_TYPE; ?>
	<? if ($finance->FIN_YEAR < $year): ?>
		<? $year = $finance->FIN_YEAR; $projects = false; ?>
		<h3 class="year"><? echo $finance->FIN_YEAR; ?></h3>
	<? endif; ?>
	<!--
	<? //if ($finance->FIN_SOURCE == FinanceSource::Project) : ?>
		<? //if (!$projects): ?>
			<? //$projects = true; ?>
			<h3><? //echo $finance->sourceDescription; ?>:</h3>
		<? //endif; ?>
		<h3><? //echo $finance->Project->PRJ_NAME; ?></h3>
		<? //if ($finance->FIN_FROM != "") echo $finance->FIN_FROM."<br />"; ?>
		<? //echo number_format($finance->FIN_AMOUNT, 2, ',', ' ')." ".$finance->currencySymbol; ?><br />
	<? //else: ?>
	-->
		<p><strong><? echo $finance->sourceDescription; ?></strong>: 
		<? echo number_format($finance->FIN_AMOUNT, 2, ',', ' ')." ".$finance->currencySymbol;  ?></p>
	<? //endif; ?>
	
	<? 
	$this->renderPartial('//finance/_history_link', array('data'=>$finance));
	if (Yii::app()->user->checkAccess('admin'))
	{
		
		$this->renderPartial('//finance/_edit_link', array('id'=>$finance->FIN_ID));
		}
	?>
	
<? endforeach; ?>

<? if (Yii::app()->user->checkAccess('admin'))
	$this->renderPartial('//finance/links', array('type'=>$type));
?>
