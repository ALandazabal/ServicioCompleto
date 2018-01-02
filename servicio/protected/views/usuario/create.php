<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>Crear Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>