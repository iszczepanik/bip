<?
	$headerLevel = 3 + $level;

	foreach ($data as $information)
	{
		$inf_model = Information::model()->findByPk($information['INF_ID']);

		$class = '';
		if ($inf_model->INF_SHOW == 0)
			if (Yii::app()->user->checkAccess('admin'))
				$class = 'muted';
			else
				$class = 'display-none';
		
		?><div class="<? echo $class; ?>" ><?
		echo "<h".$headerLevel.">".$information['INF_NAME']."</h".$headerLevel.">"; 
		
		echo $information['INF_CONTENT'];
		if (Yii::app()->user->checkAccess('admin'))
			$this->renderPartial('//information/_edit_link', array('id'=>$information->INF_ID)); 
		
		if (count($information->Projects) > 0)
			$this->renderPartial('//project/_view', array('data'=>$information->Projects));

		if (count($information->Files) > 0)
			$this->renderPartial('//file/_view_link', array('data'=>$information->Files));

		if (count($inf_model->Informations) > 0)
			$this->renderPartial('//information/_view', array('data'=>$inf_model->Informations, 'level'=>($level+1)));
			
		?></div><?

	}
?>