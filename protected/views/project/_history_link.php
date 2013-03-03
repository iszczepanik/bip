<div class="block_link right" >
<a href="" class="rejestr-zmian" id="rejestr-zmian-prj-<? echo $data->PRJ_ID; ?>" >
	<i class="icon-edit"></i>Rejestr zmian i metryczka</a>
</div>
<? $this->renderPartial('//projectHistory/admin', array('data'=>$data)); ?>
