<?php /* @var $this Controller */ ?>
<?php 
	#echo Yii::app()->user->getId();
	if(Yii::app()->user->getId()==='20626929')
		$this->beginContent('//layouts/mainA');
	else
		$this->beginContent('//layouts/main');
?>
<div class="container" style="padding-top:0">
	<div class="row-fluid">
		<div class="span12">
			<?php
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-pills'),
				));
			?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>