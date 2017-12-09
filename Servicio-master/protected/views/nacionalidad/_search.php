<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idNacionalidad'); ?>
		<?php echo $form->textField($model,'idNacionalidad'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcionN'); ?>
		<?php echo $form->textField($model,'descripcionN',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->