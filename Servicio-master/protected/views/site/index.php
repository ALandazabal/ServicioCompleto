<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">
          <i style="font-size: 200px" class="icon-credit-card icon-4x"></i>
          <h2>Heading</h2>
          <h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse,
          </h4>
    </div><!-- /.span4 -->
    <div class="span4">
      <div class="well">

            <form class="form-signin">
            <h2 class="form-signin-heading">Login</h2>
            <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<div>
				<?php echo $form->textField($model,'username',array('class'=>'input-block-level','placeholder'=>'Usuario')); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div>
				<?php echo $form->passwordField($model,'password',array('class'=>'input-block-level','placeholder'=>'Contraseña')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="buttons">
				<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary btn-large btn-block')); ?>
			</div>

		<?php $this->endWidget(); ?>
          </form>

      </div>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>

  <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel()
      })
    }(window.jQuery)
  </script>