<p></p>
<? foreach ($data as $file): ?>
	<a class="block" href="<? echo $file->FIL_PATH; ?>" target="_blank" ><i class="icon-file"></i> <? echo $file->FIL_NAME; ?></a>
<? endforeach; ?>