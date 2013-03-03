<div class="block_link right" style="margin-top: 25px;">
</div>
<small class="muted photo-title" ><? echo $data->NWS_DATE; ?></small>
<h3><?php echo $data->NWS_TITLE; ?></h3>
<?php echo $data->NWS_CONTENT; ?>
<!--<a href="<? echo  $this->createUrl('/news/view',array('id'=>$data->NWS_ID)); ?>">czytaj więcej...</a>-->

