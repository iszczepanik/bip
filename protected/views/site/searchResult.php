<h2>Wyniki wyszukiwania dla<div><small>"<? echo $phrase;?>"</small></div></h2>

<?php 
//Information
$data = $dataProvider->getData();
foreach ($data as $item)
	$this->renderPartial('_searchResultView', array('data'=>$item));

//News
$dataNews = $dataProviderNews->getData();
$header = false;
foreach ($dataNews as $item)
{
	if (!$header)
	{
		?><h3 class="year" >Aktualności / Ogłoszenia<?
		$header = true;
	}
	?><small> &bull; <a href="<? echo $item->Link; ?>"><? echo $item->NWS_TITLE; ?></a></small> <?
}
if ($header)
{
	?></h3><?
}

//Project
$dataProjects = $dataProviderProject->getData();
$type = -1;
foreach ($dataProjects as $item)
{
	if ($item->PRJ_CAT > $type)
	{
		if($type != -1)
			?></h3><?
		$type = $item->PRJ_CAT;
		?><h3 class="year" >Projekty <? echo ProjectType::GetDescriptionPlural($type); 
	} 
	?>
	<small> &bull; <a href="<? echo $item->Link; ?>"><? echo $item->PRJ_NAME; ?></a></small> 

<?
}
if($type != -1){
	?></h3><?
}

//External Control
$dataControl = $dataProviderControl->getData();
$header = false;
foreach ($dataControl as $item)
{
	if (!$header)
	{
		?><h3 class="year" >Kontrole zewnętrzne<?
		$header = true;
	}
	?><small> &bull; <a href="<? echo $item->Link; ?>"><? echo $item->CTRL_NAME; ?></a></small> <?
}
if ($header)
{
	?></h3><?
}


//File
$dataControl = $dataProviderFile->getData();
if (count($dataControl) > 0): ?>
	<h3 class="year" >Dokumenty</h3>
<?
$this->renderPartial('//file/_view_link', array('data'=>$dataControl));
endif;



?>

