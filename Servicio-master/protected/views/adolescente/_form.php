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

	<div class="pull-left span6">
		<div class="span11">
			<?php echo $form->labelEx($model,'idAdolescente'); ?>
			<?php echo $form->textField($model,'idAdolescente',array('placeholder'=>'Ej. 21123123', 'class'=>'span12')); ?>
			<?php echo $form->error($model,'idAdolescente'); ?>
		</div>
		<div class="span11">
			<?php echo $form->labelEx($model,'fkNac'); ?>
			<?php echo $form->dropDownList($model,'fkNac',$model->getMenuNac(),array("empty"=>"--", 'class'=>'span12')); ?>
			<?php echo $form->error($model,'fkNac'); ?>
		</div>	
	</div>


	<div class="pull-left span5">
		<div class="span12">
			<?php echo $form->labelEx($model,'nombreA'); ?>
			<?php echo $form->textField($model,'nombreA',array('size'=>45,'maxlength'=>45, 'placeholder'=>'Ej. María', 'class'=>'span12')); ?>
			<?php echo $form->error($model,'nombreA'); ?>
		</div>
	
		<div class="span12">
			<?php echo $form->labelEx($model,'apellidoA'); ?>
			<?php echo $form->textField($model,'apellidoA',array('size'=>45,'maxlength'=>45, 'placeholder'=>'Ej. Mora', 'class'=>'span12')); ?>
			<?php echo $form->error($model,'apellidoA'); ?>
		</div>

	</div>

	<div class="buttons span12 center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-large span6 center')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->