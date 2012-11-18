<tr><td>
	<div class="pull-right"><small class="muted photo-title" ><? echo $data->NWS_DATE; ?></small></div>
	<h3><?php echo $data->NWS_TITLE; ?></h3>
	<?php echo $data->NWS_CONTENT; ?>
	<!--<a href="<? echo  $this->createUrl('/news/view',array('id'=>$data->NWS_ID)); ?>">czytaj więcej...</a>-->
</td>
</tr>