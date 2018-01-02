<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('admin'),
	$model->idEstado=>array('view','id'=>$model->idEstado),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Estado', 'url'=>array('create')),
	array('label'=>'Manage Estado', 'url'=>array('admin')),
);
?>

<h1>Actualizar Estado <?php echo $model->idEstado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>