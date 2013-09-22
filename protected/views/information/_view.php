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

		echo "<a name='inf_".$information['INF_ID']."'></a>"; 
		echo "<h".$headerLevel.">".$information['INF_NAME']."</h".$headerLevel.">"; 
		
		//Brak treści i linków edycji i historii, jeżeli treść jest nullem, nie pusta.
		if ($information['INF_CONTENT'] != null)
		{
			echo $information['INF_CONTENT'];
			$this->renderPartial('//information/_history_link', array('data'=>$information));
			if (Yii::app()->user->checkAccess('admin'))
				$this->renderPartial('//information/_edit_link', array('id'=>$information->INF_ID)); 
		}
		else if (Yii::app()->user->checkAccess('admin') && $information['INF_OBLIGATORY'] == 0)
		{
			//echo "brak";
			$this->renderPartial('//information/_visibility_link', array('id'=>$information->INF_ID)); 
		}
		
		if ($information->IsProjectsInfo())
		{
			if (count($information->Projects) > 0)
				$this->renderPartial('//project/index', array('data'=>$information->Projects));
			if (Yii::app()->user->checkAccess('admin'))	
				$this->renderPartial('//project/_admin_links');
		}
		
		if (count($information->Finances) > 0)
			$this->renderPartial('//finance/index', array('data'=>$information->Finances));

		if (count($information->Files) > 0)
			$this->renderPartial('//file/_view_link', array('data'=>$information->Files));
			
		if ($information->INF_SHOW_CTRL == true)
			$this->renderPartial('//externalControl/index', array('data'=>$information->ExternalControls));

		if (count($inf_model->Informations) > 0)
			$this->renderPartial('//information/_view', array('data'=>$inf_model->Informations, 'level'=>($level+1)));
			
		?></div><?

	}
?>