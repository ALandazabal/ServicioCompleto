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
	/*'id'=>'visita-grid',*/
	'dataProvider'=>$model->search(),
	/*'summaryText'=>'',
	'filter'=>$model,*/
	'columns'=>array(
		'fecha',
		'h_entrada',
		'h_salida',	
		'fkUsuario',
		'fkRelVte',
		'fkRelAdol',
		array(
			'name'=>'Check', 
			'type'=>'raw', 
			'value'=>'CHtml::checkBox("Check")'
		),	
		array(
			'class' => 'zii.widgets.grid.CButtonColumn',
			/*'htmlOptions' => array('style' => 'white-space: nowrap'),*/
			'template'=>'{update}',
			'updateButtonUrl' => 'Yii::app()->controller->createUrl("update",array("fecha"=>$data["fecha"],"fkRelVte"=>$data["fkRelVte"],"fkRelAdol"=>$data["fkRelAdol"]))',
		),/**/
	),
)); ?>
