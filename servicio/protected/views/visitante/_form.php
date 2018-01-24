<?php
/* @var $this VisitanteController */
/* @var $model Visitante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitante-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> Campos requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="span5">
		<div class="span11">
			<?php echo $form->labelEx($model,'idVisitante'); ?>
			<?php echo $form->textField($model,'idVisitante', array('placeholder'=>'Ej. 12123123','class'=>'span12')); ?>
			<?php echo $form->error($model,'idVisitante'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx($model,'fkNac'); ?>
			<?php echo $form->dropDownList($model,'fkNac',$model->getMenuNac(),array("empty"=>"--",'class'=>'span12')); ?>
			<?php echo $form->error($model,'fkNac'); ?>
		</div>
		<div class="span11">
			<?php echo $form->labelEx($model,'nombreV'); ?>
			<?php echo $form->textField($model,'nombreV',array('size'=>45,'maxlength'=>45,'placeholder'=>'Ej. María','class'=>'span12')); ?>
			<?php echo $form->error($model,'nombreV'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx($model,'apellidoV'); ?>
			<?php echo $form->textField($model,'apellidoV',array('size'=>45,'maxlength'=>45, 'placeholder'=>'Ej. Mora','class'=>'span12')); ?>
			<?php echo $form->error($model,'apellidoV'); ?>
		</div>
	</div>

	<div class="span6">
		<div class="span11">
			<?php echo $form->labelEx($model,'direccion'); ?>
			<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45,'placeholder'=>'Ej. Pueblo Nuevo','class'=>'span12')); ?>
			<?php echo $form->error($model,'direccion'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx($model.'fkMunicipio'); ?>
			<?php echo $form->dropDownList($model,'fkMunicipio', $model->getMenuNac(),array("empty"=>"--",'class'=>'span12')); ?>
			<?php echo $form->error($model,'fkMunicipio'); ?>
		</div>

		<!--Para actualizar los municipios dependiendo del estado que elijan-->
		<?php 
			/*$htmlOptions=array(
				"ajax" =>array(
					"url"=>$this->createUrl("munByEst"),
					"type"=>"POST",
					"update"=>"#Visitante_fkMunicipio",
				),
			 );*/
		 ?>

		
	</div>

	<div class="buttons span12 center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-large span6 center')); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->