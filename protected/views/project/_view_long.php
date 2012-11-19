
<h3><? echo $data->PRJ_NAME; ?></h3>
<p><? echo $data->PRJ_DESCRIPTION; ?></p>
<p><strong>Źródło finansowania:</strong> <? echo $data->PRJ_SOURCES; ?></p>
<? if ($data->PRJ_AMOUNT_DONATION != null) : ?>
<p><strong>Wysokość dotacji:</strong> <? echo $data->PRJ_AMOUNT_DONATION; ?> PLN</p>
<? endif; ?>
<? if ($data->PRJ_AMOUNT_PUBLIC != null) : ?>
<p><strong>Wysokość dotacji:</strong> <? echo $data->PRJ_AMOUNT_PUBLIC; ?> PLN</p>
<? endif; ?>
