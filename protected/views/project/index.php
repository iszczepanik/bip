<p></p>
<? 
foreach ($data as $project)
{	
	$this->renderPartial('//project/_view_long', array('data'=>$project));
}

