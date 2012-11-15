<p></p>
<? foreach ($data as $file): ?>
	<a class="block" href="<? echo $this->createUrl('file/view', array('id'=>$file->FIL_ID)); ?>" target="_blank" >
		<i class="icon-file"></i> <? echo $file->FIL_NAME; ?>
	</a>
<? endforeach; ?>