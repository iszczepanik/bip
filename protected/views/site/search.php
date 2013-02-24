<h2>Wyszukiwanie</h2>

<form class="form-horizontal" action="<? echo  $this->createUrl('Site/searchResult'); ?>" name="search" method="POST" >


<div class='control-group'>
	<label for="searchfrase" class='control-label'> Wpisz frazę: </label>
	<div class="controls">
		<input class="span4" name="searchfrase" size="16" type="text" >
	</div>
</div>
<div class="form-actions">
	<button class="btn btn-primary" type="submit" name="search" ><i class="icon-search icon-white"></i> Szukaj</button>
</div>

</form>