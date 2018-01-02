<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idAdolescente'); ?>
		<?php echo $form->textField($model,'idAdolescente'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreA'); ?>
		<?php echo $form->textField($model,'nombreA',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'apellidoA'); ?>
		<?php echo $form->textField($model,'apellidoA',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fkNac'); ?>
		<?php echo $form->textField($model,'fkNac'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->