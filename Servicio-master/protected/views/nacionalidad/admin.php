<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */

$this->breadcrumbs=array(
	'Nacionalidads'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Nacionalidad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nacionalidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Nacionalidades</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nacionalidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idNacionalidad',
		'descripcionN',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
