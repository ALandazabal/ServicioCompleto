<?php
/* @var $this EstadoController */
/* @var $model Estado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idEstado'); ?>
		<?php echo $form->textField($model,'idEstado'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcionE'); ?>
		<?php echo $form->textField($model,'descripcionE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->