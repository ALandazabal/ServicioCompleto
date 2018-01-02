<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nacionalidad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'idNacionalidad'); ?>
		<?php echo $form->textField($model,'idNacionalidad'); ?>
		<?php echo $form->error($model,'idNacionalidad'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcionN'); ?>
		<?php echo $form->textField($model,'descripcionN',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionN'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->