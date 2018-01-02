<?php
/* @var $this AdolescenteController */
/* @var $data Adolescente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAdolescente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAdolescente), array('view', 'id'=>$data->idAdolescente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreA')); ?>:</b>
	<?php echo CHtml::encode($data->nombreA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidoA')); ?>:</b>
	<?php echo CHtml::encode($data->apellidoA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fkNac')); ?>:</b>
	<?php echo CHtml::encode($data->fkNac); ?>
	<br />


</div>