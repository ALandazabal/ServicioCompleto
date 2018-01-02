<?php
/* @var $this VisitanteController */
/* @var $model Visitante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'relacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'fkVisitante'); ?>
		<?php echo $form->dropDownList($model,'fkVisitante',$model->getMenuVisitante(),array("empty"=>"--")); ?>
		<?php echo $form->error($model,'fkVisitante'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fkAdolescente'); ?>
		<?php echo $form->dropDownList($model,'fkAdolescente',$model->getMenuAdolescente(),array("empty"=>"--")); ?>
		<?php echo $form->error($model,'fkAdolescente'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'fkRol'); ?>
		<?php echo $form->dropDownList($model,'fkRol',$model->getMenuRol(),array("empty"=>"--")); ?>
		<?php echo $form->error($model,'fkRol'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->