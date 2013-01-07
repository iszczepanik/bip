<p></p>
<? foreach ($data as $file): ?>
	<div>
	<? if (count($file->History) > 0) : ?>
	<a rel="tooltip" title="Zobacz poprzednie wersje" href="" class="rejestr-zmian" id="rejestr-zmian-file-<? echo $file->FIL_ID; ?>" ><i class="icon-edit"></i></a>
	<a href="<? echo $this->createUrl('file/view', array('id'=>$file->FIL_ID)); ?>" target="_blank" >
		<i class="icon-file"></i> <? echo $file->FIL_NAME; ?>
	</a>
	<? $this->renderPartial('//fileHistory/admin', array('data'=>$file)); ?>
	<? else: ?>
	<span class="muted" ><a rel="tooltip" title="Brak poprzednich wersji"  ><i class="icon-edit"></i></a></span>
	<a href="<? echo $this->createUrl('file/view', array('id'=>$file->FIL_ID)); ?>" target="_blank" >
		<i class="icon-file"></i> <? echo $file->FIL_NAME; ?>
	</a>
	<? endif; ?>
	</div>
<? endforeach; ?>

