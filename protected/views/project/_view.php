<p></p>
<table class="items table table-striped table-bordered table-condensed projects">
<thead>
<tr>
<th>Opis</th>
<th>Źródła</th>
<th>Kwota darowizny</th>
<th>Kwota środków publicznych</th>
</tr>
</thead>
<tbody>

<? foreach ($data as $project): ?>
	
<tr>
	<td><? echo $project->PRJ_DESCRIPTION; ?></td>
	<td><? echo $project->PRJ_SOURCES; ?></td>
	<td><? echo $project->PRJ_AMOUNT_DONATION; ?></td>
	<td><? echo $project->PRJ_AMOUNT_PUBLIC; ?></td>
	
</tr>
	
<? endforeach; ?>

</tbody>
</table>
<? if (Yii::app()->user->checkAccess('admin')): ?>
	<?php $this->renderPartial('//project/_edit_link'); ?>
<? endif; ?>


