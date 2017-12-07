<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'idRol'); ?>
		<?php echo $form->textField($model,'idRol'); ?>
		<?php echo $form->error($model,'idRol'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcionR'); ?>
		<?php echo $form->textField($model,'descripcionR',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionR'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->