<?php
/* @var $this VisitanteController */
/* @var $data Visitante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVisitante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVisitante), array('view', 'id'=>$data->idVisitante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreV')); ?>:</b>
	<?php echo CHtml::encode($data->nombreV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidoV')); ?>:</b>
	<?php echo CHtml::encode($data->apellidoV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkNac')); ?>:</b>
	<?php echo CHtml::encode($data->fkNac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkEstado')); ?>:</b>
	<?php echo CHtml::encode($data->fkEstado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkMunicipio')); ?>:</b>
	<?php echo CHtml::encode($data->fkMunicipio); ?>
	<br />


</div>