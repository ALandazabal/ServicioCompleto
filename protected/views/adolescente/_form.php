<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adolescente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'idAdolescente'); ?>
		<?php echo $form->textField($model,'idAdolescente'); ?>
		<?php echo $form->error($model,'idAdolescente'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombreA'); ?>
		<?php echo $form->textField($model,'nombreA',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreA'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellidoA'); ?>
		<?php echo $form->textField($model,'apellidoA',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellidoA'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fkNac'); ?>
		<?php echo $form->dropDownList($model,'fkNac',$model->getMenuNac(),array("empty"=>"--")); ?>
		<?php echo $form->error($model,'fkNac'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->