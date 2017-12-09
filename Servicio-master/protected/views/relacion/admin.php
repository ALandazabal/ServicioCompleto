<?php
/* @var $this RelacionController */

$this->menu=array(
	array('label'=>'Create Relación', 'url'=>array('create')),
	array('label'=>'Reporte', 'url'=>array('admin',"reporte"=>1)),
);

?>
<h1>Relaciones</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'relacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'fkRol',
		'fkVisitante',
		'fkAdolescente',
		array(
			'name'=>'Role',
			'value'=>'$data->fkRol0->descripcionR',
		),		
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
