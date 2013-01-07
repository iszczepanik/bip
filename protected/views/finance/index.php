<p></p>
<? $year = 9999; $projects = false; ?>
<? foreach ($data as $finance): ?>
	<?php //$this->renderPartial('//project/_view_long', array('data'=>$project)); ?>
	<? if ($finance->FIN_YEAR < $year): ?>
		<? $year = $finance->FIN_YEAR; ?>
		<h3><? echo $finance->FIN_YEAR; ?></h3>
	<? endif; ?>
	<? if ($finance->FIN_SOURCE == FinanceSource::Project) : ?>
		<? if (!$projects): ?>
			<? $projects = true; ?>
			<h3><? echo $finance->sourceDescription; ?></h3>
		<? endif; ?>
		<h3><? echo $finance->Project->PRJ_NAME; ?></h3>
		<? echo $finance->FIN_FROM; ?><br />
		<? echo $finance->FIN_AMOUNT; ?> PLN<br />
	<? else: ?>
		<p><strong><? echo $finance->sourceDescription; ?></strong>: <? echo $finance->FIN_AMOUNT; ?> PLN</p>
	<? endif; ?>
<? endforeach; ?>

<? if (Yii::app()->user->checkAccess('admin')): ?>

<? endif; ?>
