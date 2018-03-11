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
			'name'=>'Rol', 
			'type'=>'raw', 
			'value'=>function($model){
				$var = $model->getMenuRelacion($model->fkRelVte,$model->fkRelAdol);
				return $var;
			},
			/*'$data->fkRol0->fkRol',CHtml::encode(function($data,$row){
				$criteria = new CDbCriteria;
				$criteria->condition='fkVisitante=:fkVte AND fkAdolescente=:fkAdol';
				$criteria->params=array(':fkVte'=>$data->fkRelVte, ':fkAdol'=>$data->fkRelAdol);
				echo "<script> alert('".$data['fkRelVte']."')</script>";
				return Relacion::model()->find($criteria);
			}),*/
		),
			/*'Relacion::model()->find('fkVisitante=:fkVte AND fkAdolescente=:fkAdol', array(':fkVte'=>$data['fkRelVte'], ':fkAdol'=>$data['fkRelAdol']))',
		),	"Check",$data->stopPublish,array("id"=>"chkPublish_".$data->id)*/
		/*array(
			'name'=>'Rolv',
			'value'=>'$data->fkRol0->idRol',
		),*/
		array(
			'class' => 'zii.widgets.grid.CButtonColumn',
			/*'htmlOptions' => array('style' => 'white-space: nowrap'),*/
			'template'=>'{update}',
			'updateButtonUrl' => 'Yii::app()->controller->createUrl("update",array("fecha"=>$data["fecha"],"fkRelVte"=>$data["fkRelVte"],"fkRelAdol"=>$data["fkRelAdol"]))',
			'buttons' => array(
	    		'update' => array(
	        		'label' => 'Delete',
	    			'visible' => '($data->h_salida != null ) ? false : true',  //<< el condicional
	    		),
    		),
		),/**/
	),
)); ?>
