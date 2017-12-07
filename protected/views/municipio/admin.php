<?php
/* @var $this MunicipioController */
/* @var $model Municipio */

$this->breadcrumbs=array(
	'Municipios'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Municipio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#municipio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Municipios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'municipio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idMunicipio',
		'descripcionM',
		array(
			'name'=>'descripcionE',
			'value'=>'$data->fkEstado0->descripcionE'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
