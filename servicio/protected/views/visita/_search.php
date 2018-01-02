<?php
/* @var $this VisitanteController */
/* @var $model Visitante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php #echo $form->label($model,'Cedula_v'); ?>
		<?php #echo $form->textField($model,'Cedula_v'); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Nombre'); ?>
		<?php #echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Apellido'); ?>
		<?php #echo $form->textField($model,'Apellido',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Direccion'); ?>
		<?php #echo $form->textField($model,'Direccion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Telefono'); ?>
		<?php #echo $form->textField($model,'Telefono',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Fk_estado'); ?>
		<?php #echo $form->textField($model,'Fk_estado'); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Fk_municipio'); ?>
		<?php #echo $form->textField($model,'Fk_municipio'); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Fk_parentesco'); ?>
		<?php #echo $form->textField($model,'Fk_parentesco'); ?>
	</div>

	<div class="row">
		<?php #echo $form->label($model,'Fk_nac'); ?>
		<?php #echo $form->textField($model,'Fk_nac'); ?>
	</div>-->

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary btn-large btn-block')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->