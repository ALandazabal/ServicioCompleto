<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idMunicipio'); ?>
		<?php echo $form->textField($model,'idMunicipio'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcionM'); ?>
		<?php echo $form->textField($model,'descripcionM',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fkEstado'); ?>
		<?php echo $form->textField($model,'fkEstado'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->