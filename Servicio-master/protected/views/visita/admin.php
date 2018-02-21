<?php
/* @var $this VisitaController */


$this->menu=array(
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'Reporte', 'url'=>array('admin',"reporte"=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.btn-info').click(function(){
	$('.search-form').toggle();
	return false;
});
");
?>
<h1><?php echo $this->id ?></h1>

<?php echo CHtml::link('Nuevo','#',array('class'=>'btn-info btn-small')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('create',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visita-grid',
	'summaryText'=>'',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	/*'columns'=>array(
		'fecha',
		'Fk_usuario',
		'Fk_visitante',
		'Fk_adolescente',
		'Telefono',
		'Fk_estado',
		
		'Fk_municipio',
		'Fk_parentesco',
		'Fk_nac',
		
		array(
			'class'=>'CButtonColumn',
		),
	),*/
)); ?>
