<div class="view">

<h3><? echo $data->PRJ_NAME; ?></h3>
<p><? echo $data->PRJ_DESCRIPTION; ?></p>
<p><strong>Źródło finansowania:</strong> <? echo $data->PRJ_SOURCES; ?></p>
<? if ($data->PRJ_AMOUNT_DONATION != null) : ?>
<p><strong>Wysokość dotacji (darowizna):</strong> <? echo $data->amountDonationFormated." ".$data->donationCurrencySymbol; ?></p>
<? endif; ?>
<? if ($data->PRJ_AMOUNT_PUBLIC != null) : ?>
<p><strong>Wysokość dotacji (środki publiczne):</strong> <? echo $data->amountPublicFormated." ".$data->publicCurrencySymbol; ?></p>
<? endif; ?>
	
</div>