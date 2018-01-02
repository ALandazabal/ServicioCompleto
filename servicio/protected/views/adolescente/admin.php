<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */


Yii::app()->clientScript->registerScript('search', "
$('.nav-tabs').click(function(){
	$('.search-form').toggle();
	return false;
});
");
?>

<h1>Adolescentes</h1>

<?php
/*$this->menu=array(
	array('label'=>'Crear Adolescente', 'url'=>array('create')),
	array('label'=>'Reporte','url'=>array('admin','reporte'=>1)),
);*/
?>

<?php echo CHtml::link('Insertar','#',array('class'=>'nav-tabs')); ?>
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
	),
)); ?>
