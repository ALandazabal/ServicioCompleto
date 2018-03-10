<?php
/* @var $this VisitanteController */
/* @var $model Visitante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visita-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="span5">
		<div class="span11">
			<?php echo $form->labelEx($model,'fecha'); ?>
			<?php echo $form->textField($model,'fecha'); ?>
			<?php echo $form->error($model,'fecha'); ?>
		</div>	

		<div class="span11">
			<?php echo $form->labelEx($model,'h_entrada'); ?>
			<?php echo $form->textField($model,'h_entrada'); ?>
			<?php echo $form->error($model,'h_entrada'); ?>
		</div>	
		<div class="span11">
			<?php echo $form->labelEx($model,'h_salida'); ?>
			<?php date_default_timezone_set('America/Caracas');
					 $h_salida = date("h:i");
				echo $form->textField($model,'h_salida',array('value'=>$h_salida)); ?>
			<?php echo $form->error($model,'h_salida'); ?>
		</div>	

	</div>

	<div class="span6">
		<div class="span11">
			<?php echo $form->labelEx($model,'fkUsuario'); ?>
			<?php echo $form->textField($model,'fkUsuario'); ?>
			<?php echo $form->error($model,'fkUsuario'); ?>
		</div>
		<div class="span11">
			<?php echo $form->labelEx($model,'fkRelVte'); ?>
			<?php echo $form->textField($model,'fkRelVte'); ?>
			<?php echo $form->error($model,'fkRelVte'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx($model,'fkRelAdol'); ?>
			<?php echo $form->textField($model,'fkRelAdol'); ?>
			<?php echo $form->error($model,'fkRelAdol'); ?>
		</div>
	</div>

	<div class="buttons span12 center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-large span6 center')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->