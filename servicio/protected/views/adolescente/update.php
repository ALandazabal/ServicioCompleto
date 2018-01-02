<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */


$this->menu=array(
	array('label'=>'Create Adolescente', 'url'=>array('create')),
	array('label'=>'View Adolescente', 'url'=>array('view', 'id'=>$model->idAdolescente)),
	array('label'=>'Manage Adolescente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Adolescente <?php echo $model->idAdolescente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>