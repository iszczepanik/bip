
	<?
	$headerLevel = 4 + $level;
	?>
	<? foreach ($data/*->Informations*/ as $information): ?>
		
		<?
		$inf_model = Information::model()->findByPk($information['INF_ID']);
		?>
		
		<? echo "<h".$headerLevel.">".$information['INF_NAME']."</h".$headerLevel.">"; ?>
		<? echo $information['INF_CONTENT']; ?>
		
		<? if (count($inf_model->Informations) > 0) : ?>
		
			<? //var_dump($inf_model->Informations); ?>
			<?php $this->renderPartial('_view', array('data'=>$inf_model->Informations, 'level'=>($level+1))); ?>
		
		<? endif; ?>
		
	<? endforeach; ?>