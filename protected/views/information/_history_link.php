<? if (count($data->History) > 0) : ?>
<div>
<a href="" class="rejestr-zmian" id="rejestr-zmian-<? echo $data->INF_ID; ?>" >
	<i class="icon-edit"></i>Rejestr zmian</a>
</div>
<? $this->renderPartial('//informationHistory/admin', array('data'=>$data)); ?>
<? else : ?>
<div class="muted" >
<a rel="tooltip" data-original-title="Brak poprzednich wersji" id="rejestr-zmian-<? echo $data->INF_ID; ?>" >
	<i class="icon-edit"></i>Rejestr zmian</a>
</div>
<? endif; ?>




<!--<a rel="tooltip" data-original-title="Zobacz t� wersj�" data-toggle="modal">Zobacz t� wersj�</a>-->