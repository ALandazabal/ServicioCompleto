<?php
/* @var $this MunicipioController */
/* @var $model Municipio */

$this->breadcrumbs=array(
	'Municipios'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Municipio', 'url'=>array('create')),
	array('label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Municipio <?php echo $model->idMunicipio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>