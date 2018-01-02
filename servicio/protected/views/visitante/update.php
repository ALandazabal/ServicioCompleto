<?php
/* @var $this VisitanteController */
/* @var $model Visitante */

$this->menu=array(
	array('label'=>'Create Visitante', 'url'=>array('create')),
	array('label'=>'View Visitante', 'url'=>array('view', 'id'=>$model->idVisitante)),
	array('label'=>'Manage Visitante', 'url'=>array('admin')),
);
?>

<h1>Actualizar Visitante <?php echo $model->idVisitante; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>