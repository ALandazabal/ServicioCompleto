<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */

$this->menu=array(
	array('label'=>'Manage Adolescente', 'url'=>array('admin')),
);
?>

<h1>Crear Adolescente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>