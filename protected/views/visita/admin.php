<?php
/* @var $this VisitaController */


$this->menu=array(
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'Reporte', 'url'=>array('admin',"reporte"=>1)),
);
?>
<h1><?php echo $this->id ?></h1>

<!-- search-form <?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visita-grid',
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
