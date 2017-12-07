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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'idVisitante'); ?>
		<?php echo $form->textField($model,'idVisitante'); ?>
		<?php echo $form->error($model,'idVisitante'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombreV'); ?>
		<?php echo $form->textField($model,'nombreV',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreV'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellidoV'); ?>
		<?php echo $form->textField($model,'apellidoV',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellidoV'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<!--Para actualizar los municipios dependiendo del estado que elijan-->
	<?php 
		$htmlOptions=array(
			"ajax" =>array(
				"url"=>$this->createUrl("munByEst"),
				"type"=>"POST",
				"update"=>"#Visitante_fkMunicipio",
			),
		 );
	 ?>

	<div>
		<?php echo $form->labelEx($model,'fkEstado'); ?>
		<?php echo $form->dropDownList($model,'fkEstado',$model->getMenuEstado(),$htmlOptions); ?>
		<?php echo $form->error($model,'fkEstado'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fkMunicipio'); ?>
		<?php echo $form->dropDownList($model,'fkMunicipio',$model->getMenuMunicipio()); ?>
		<?php echo $form->error($model,'fkMunicipio'); ?>
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