<h2>Logo organizacji</h2>

<form enctype="multipart/form-data" class="form-horizontal" id="image-form" 
	action="<?php echo $this->createUrl('/imageAdmin/upload'); ?>" method="post">
	<div class="alert alert-warning">Pola oznaczone <span class="required">*</span> są wymagane</div>
	<div class="alert alert-info">Obsługiwane formaty: <strong>jpg</strong>, <strong>gif</strong> i <strong>png</strong></div>
	<div class='control-group'>
		<label class="control-label required" for="Image_image"><span class="required">*</span> Plik</label>		<div class="controls">
		<input id="ytImage_image" type="hidden" value="" name="Image[image]" /><input name="Image[image]" id="Image_image" type="file" />				</div>
	</div>

	<div class="form-actions">
		<button class="btn btn-primary" type="submit" name="yt1">Wyślij</button>	</div>

</form>
