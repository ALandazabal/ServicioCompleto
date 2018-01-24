<?php
/* @var $this VisitanteController */
/* @var $model Visitante */

/*$this->breadcrumbs=array(
	'Visitantes'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Visitante', 'url'=>array('create')),
	array('label'=>'Reporte','url'=>array('admin',"reporte"=>1)),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.btn-info').click(function(){
	$('.search-form').toggle();
	return false;
});
");
?>

<h1>Visitantes</h1>

<?php echo CHtml::link('Nuevo','#',array('class'=>'btn-info btn-small')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('create',array(
	'model'=>$model,
)); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
	),
)); ?>
