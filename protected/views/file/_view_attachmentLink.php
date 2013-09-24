<p></p>
<? foreach ($data as $fileAtch): ?>
	<? $file = $fileAtch->File; ?>
	<div>
	<a href="<? echo $this->createUrl('file/view', array('id'=>$file->FIL_ID)); ?>" target="_blank" >
		<i class="icon-file"></i> <? echo $file->FIL_NAME; ?>
	</a>
	<div class="block_link right" >
		<a rel="tooltip" title="Zobacz metryczkę i poprzednie wersje" href="" class="rejestr-zmian" id="rejestr-zmian-file-<? echo $file->FIL_ID; ?>" ><i class="icon-edit"></i>Rejestr zmian i metryczka</a>
	</div>
	<? $this->renderPartial('//fileHistory/admin', array('data'=>$file)); ?>
	</div>
<? endforeach; ?>

