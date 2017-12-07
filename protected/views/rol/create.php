<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Rol', 'url'=>array('admin')),
);
?>

<h1>Crear Rol</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>