<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */


$this->menu=array(
	array('label'=>'Create Adolescente', 'url'=>array('create')),
	array('label'=>'Update Adolescente', 'url'=>array('update', 'id'=>$model->idAdolescente)),
	array('label'=>'Delete Adolescente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAdolescente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Adolescente', 'url'=>array('admin')),
);
?>

<h1>Adolescente #<?php echo $model->idAdolescente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAdolescente',
		'nombreA',
		'apellidoA',
		//'fkNac',
		array(
			'name'=>'fkNac',
			'value'=>CHtml::encode($model->fkNac0->descripcionN),
		),
	),
)); ?>
