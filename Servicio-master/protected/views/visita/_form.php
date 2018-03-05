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

			<?php date_default_timezone_set('America/Caracas');
 				$fecha = date("Y-m-d");
				echo $form->textField($model,'fecha',array('value'=>$fecha)); ?>
			<?php echo $form->error($model,'fecha'); ?>
		</div>	

		<div class="span11">
			<?php echo $form->labelEx($model,'h_entrada'); ?>
			<?php date_default_timezone_set('America/Caracas');
					 $h_entrada = date("h:i");
				echo $form->textField($model,'h_entrada',array('value'=>$h_entrada)); ?>
			<?php echo $form->error($model,'h_entrada'); ?>
		</div>	

		<div class="span11">
			<?php echo $form->labelEx($model,'fkUsuario'); ?>
			<!--<?php #echo $form->dropDownList($model,'fkUsuario',$model->getMenuUsuario(),array("empty"=>"--")); ?>-->
			<?php echo $form->textField($model,'fkUsuario',array('value'=>Yii::app()->user->name)); ?>
			<?php echo $form->error($model,'fkUsuario'); ?>
		</div>
	</div>

	<div class="span6">
		<div class="span11">
			<?php echo $form->labelEx(Visitante::model(),'fkVisitante'); ?>
			<!--<?php #echo $form->dropDownList($model,'fkRelVte',$model->getMenuVisitante(),array("empty"=>"--")); ?>-->
			<?php echo $form->textField(Visitante::model(),'idVisitante'); ?>
			<?php echo $form->error(Visitante::model(),'fkVisitante'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx(Adolescente::model(),'fkAdolescente'); ?>
			<!--<?php #echo $form->dropDownList($model,'fkRelAdol',$model->getMenuAdolescente(),array("empty"=>"--")); ?>-->
			<?php echo $form->textField(Adolescente::model(),'idAdolescente'); ?>
			<?php echo $form->error(Adolescente::model(),'fkAdolescente'); ?>
		</div>
		<div class="span11">
			<?php echo $form->labelEx(Rol::model(),'idRol'); ?>
			<?php echo $form->dropDownList(Rol::model(),'idRol',$model->getMenuRol()); ?>
			<?php echo $form->error(Rol::model(),'idRol'); ?>
		</div>
	</div>

	<div class="buttons span12 center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-large span6 center')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->