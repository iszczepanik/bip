<p></p>
<? 
foreach ($data as $project)
{	
	$this->renderPartial('//project/_view_long', array('data'=>$project));
	if (Yii::app()->user->checkAccess('admin'))
		$this->renderPartial('//project/_edit_link', array('id'=>$project->PRJ_ID));
}
if (Yii::app()->user->checkAccess('admin')) :
?>
<br />
<div class="block_link right" >
<a href="<?php echo $this->createUrl('/ProjectAdmin/create'); ?>">
	<i class="icon-plus-sign"></i>Dodaj nowy projekt
</a>
<a class="block right" href="<?php echo $this->createUrl('/projectAdmin/admin'); ?>">
	<i class="icon-search"></i><i class="icon-plus-sign"></i><i class="icon-pencil"></i><i class="icon-trash"></i>Panel administracyjny (wyszukiwanie, edycja, usuwanie)
</a>
</div>
<? endif; ?>
