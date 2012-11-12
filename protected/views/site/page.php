<? foreach ($content as $item): ?>
	<ul class="nav nav-tabs">
		<li class="active"><a href="#" >
		<h2><? echo $item['NWS_TITLE']; ?></h2></a>
		</li>
		<li></li>
	</ul>
	<div>
		<? echo $item['NWS_CONTENT']; ?>
	</div>
<? endforeach; ?>


