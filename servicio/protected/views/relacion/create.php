<?php
/* @var $this RelacionController */

$this->menu=array(
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
