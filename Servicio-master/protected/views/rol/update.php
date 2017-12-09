<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Rol', 'url'=>array('create')),
	array('label'=>'Manage Rol', 'url'=>array('admin')),
);
?>

<h1>Actualizar Rol <?php echo $model->idRol; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>