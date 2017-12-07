<?php
/* @var $this VisitanteController */
/* @var $model Visitante */

$this->breadcrumbs=array(
	'Visitantes'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Visitante', 'url'=>array('create')),
	array('label'=>'Reporte','url'=>array('admin',"reporte"=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visitante-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Visitantes</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visitante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idVisitante',
		'nombreV',
		'apellidoV',
		'direccion',
		//'fkMunicipio',
		//'fkNac',
		array(
			'name'=>'Nationality',
			'value'=>'$data->fkNac0->descripcionN',
		),
		array(
			'name'=>'Municip',
			'value'=>'$data->fkMunicipio0->descripcionM',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
