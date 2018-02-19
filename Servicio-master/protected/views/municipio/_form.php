<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'municipio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'descripcionM'); ?>
		<?php echo $form->textField($model,'descripcionM',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionM'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fkEstado'); ?>
		<?php echo $form->dropDownList($model,'fkEstado',$model->getMenuEstado(),array("empty"=>"--")); ?>
		<?php echo $form->error($model,'fkEstado'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->