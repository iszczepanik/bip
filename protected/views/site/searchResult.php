<h2>Wyniki wyszukiwania dla<div><small>"<? echo $phrase;?>"</small></div></h2>

<?php 
$data = $dataProvider->getData();
foreach ($data as $item)
	$this->renderPartial('_searchResultView', array('data'=>$item));

$dataProjects = $dataProviderProject->getData();
$type = -1;
foreach ($dataProjects as $item)
{
	if ($item->PRJ_CAT > $type)
	{
		if($type != -1)
			?></h3></a></div><?
		$type = $item->PRJ_CAT;
		$inf = Information::FindByProjectType($type);
		?><div><a href="<? echo $inf->Link; ?>"><h3 class="year" >Projekty <? echo ProjectType::GetDescriptionPlural($type); 
	} 
	?>
	<small> &bull; <? echo $item->PRJ_NAME; ?></small> 

<?
}
if($type != -1){
	?></h3></a></div><?
}
?>

