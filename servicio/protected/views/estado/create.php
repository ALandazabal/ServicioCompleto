<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Estado', 'url'=>array('admin')),
);
?>

<h1>Crear Estado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>