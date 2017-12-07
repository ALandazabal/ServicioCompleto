<?php
/* @var $this MunicipioController */
/* @var $model Municipio */

$this->breadcrumbs=array(
	'Municipios'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<h1>Crear Municipio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>