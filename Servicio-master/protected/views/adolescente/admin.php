<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */

$this->menu=array(
	array('label'=>'Crear Adolescente', 'url'=>array('create')),
	array('label'=>'Reporte','url'=>array('admin','reporte'=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#adolescente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adolescentes</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'adolescente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idAdolescente',
		'nombreA',
		'apellidoA',
		//'fkNac',
		array(
			'name'=>'Nationality',//Nombre de la variable creada
			'value'=>'$data->fkNac0->descripcionN',//Nombres de la db
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
