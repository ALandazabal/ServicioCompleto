<?php
/* @var $this VisitanteController */
/* @var $model Visitante */

$this->menu=array(
	array('label'=>'Create Visitante', 'url'=>array('create')),
	array('label'=>'Manage Visitante', 'url'=>array('admin')),
);
?>

<h1>Actualizar Visita</h1>

<?php echo $this->renderPartial('_formU', array('model'=>$model)); ?>