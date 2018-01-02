<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);*/
?>

<h1 class="form-signin-heading">Inicio de Sesión</h1>

<section class="bg pd4">
	<div class="container center">
	  	<div class="row-fluid">
			<div class="span8">
	          <i style="font-size: 200px" class="icon-user icon-4x"></i>
	          <!--<img src="LogoMPPSP.bmp">
	          <img src="LogoMPPSP.bmp" class="img-responsive" alt="Responsive image">-->
	          <h2>MINISTERIO SERVICIO PENITENCIARIO</h2>
	          <h4>
	            Hacia la mujer y el hombre nuevo.
	          </h4>
	    	</div><!-- /.span4 -->

			<div class="span4">
			    <div class="well">

					<div class="form-signin">
						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'login-form',
							'enableClientValidation'=>true,
							'clientOptions'=>array(
								'validateOnSubmit'=>true,
							),
						)); ?>

							<div>
								<?php echo $form->textField($model,'username',array('class'=>'input-block-level','placeholder'=>'Cédula')); ?>
								<?php echo $form->error($model,'username'); ?>
							</div>

							<div>
								<?php echo $form->passwordField($model,'password',array('class'=>'input-block-level','placeholder'=>'Clave')); ?>
								<?php echo $form->error($model,'password'); ?>
							</div>

							<div class="buttons">
								<?php echo CHtml::submitButton('Entrar',array('class'=>'btn btn-primary btn-large btn-block')); ?>
							</div>

						<?php $this->endWidget(); ?>
					</div><!-- form -->
				</div>
			</div>
		</div>
	</div>
</section>