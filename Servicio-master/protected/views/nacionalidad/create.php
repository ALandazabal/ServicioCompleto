<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */

$this->breadcrumbs=array(
	'Nacionalidads'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Nacionalidad', 'url'=>array('admin')),
);
?>

<h1>Crear Nacionalidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>