<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */

$this->breadcrumbs=array(
	'Nacionalidads'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Nacionalidad', 'url'=>array('create')),
	array('label'=>'Manage Nacionalidad', 'url'=>array('admin')),
);
?>

<h1>Actualizar Nacionalidad <?php echo $model->idNacionalidad; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>