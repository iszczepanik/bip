<?php $this->beginContent('//layouts/main'); ?>
<div>
	<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				//'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		<div id="content">
			
		
			<?php echo $content; ?>
		</div><!-- content -->

</div>
<?php $this->endContent(); ?>