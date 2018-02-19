<?php
/* @var $this VisitanteController */
/* @var $model Visitante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idVisitante'); ?>
		<?php echo $form->textField($model,'idVisitante'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreV'); ?>
		<?php echo $form->textField($model,'nombreV',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'apellidoV'); ?>
		<?php echo $form->textField($model,'apellidoV',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fkEstado'); ?>
		<?php echo $form->textField($model,'fkEstado'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fkMunicipio'); ?>
		<?php echo $form->textField($model,'fkMunicipio'); ?>
	</div>

	<div>
		<?php //echo $form->label($model,'fkRol'); ?>
		<?php //echo $form->textField($model,'fkRol'); ?>
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