<? if (count($data->History) > 0) : ?>
<div class="block_link right" >
<a href="" class="rejestr-zmian" id="rejestr-zmian-finance-<? echo $data->FIN_ID; ?>" >
	<i class="icon-edit"></i>Rejestr zmian</a>
</div>
<? $this->renderPartial('//financeHistory/admin', array('data'=>$data)); ?>
<? else : ?>
<div class="block_link muted right" >
<a rel="tooltip" data-original-title="Brak poprzednich wersji" id="rejestr-zmian-<? echo $data->FIN_ID; ?>" >
	<i class="icon-edit"></i>Rejestr zmian</a>
</div>
<? endif; ?>




<!--<a rel="tooltip" data-original-title="Zobacz t� wersj�" data-toggle="modal">Zobacz t� wersj�</a>-->
