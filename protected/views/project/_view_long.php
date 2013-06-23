<a name="prj_<? echo $data->PRJ_ID; ?>"></a> 
<h3 class="year" ><? echo $data->PRJ_NAME; ?></h3>
<p><? echo $data->PRJ_DESCRIPTION; ?></p>
<p><strong>Źródło finansowania:</strong> <? echo $data->PRJ_SOURCES; ?></p>
<? if ($data->PRJ_AMOUNT_DONATION != null) : ?>
<p><strong>Wysokość dotacji (darowizna):</strong> <? echo number_format($data->PRJ_AMOUNT_DONATION, 2, ',', ' '); ?> PLN</p>
<? endif; ?>
<? if ($data->PRJ_AMOUNT_PUBLIC != null) : ?>
<p><strong>Wysokość dotacji (środki publiczne):</strong> <? echo number_format($data->PRJ_AMOUNT_PUBLIC, 2, ',', ' '); ?> PLN</p>
<? endif; ?>
<?
$this->renderPartial('//project/_history_link', array('data'=>$data));
if (Yii::app()->user->checkAccess('admin'))
{
	$this->renderPartial('//project/_edit_link', array('id'=>$data->PRJ_ID));
	?>
	<div class="block_link right" >
		<a rel="tooltip" title="Przypnij/odepnij dokumenty" href="<? echo $this->createUrl('fileAttachment/admin', array('id'=>$data->PRJ_ID)); ?>" >
			<i class="icon-folder-open" ></i>Przypnij/odepnij dokumenty
		</a>
	</div>
	<?
}

//Files
$FilesDataProvider = $data->GetFiles();
$FilesData = $FilesDataProvider->getData();
if (count($FilesData) > 0)
{
	$this->renderPartial('//file/_view_attachmentLink', array('data'=>$FilesData));
}
?>