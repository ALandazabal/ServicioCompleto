<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Rol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rol-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Roles</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rol-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idRol',
		'descripcionR',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
