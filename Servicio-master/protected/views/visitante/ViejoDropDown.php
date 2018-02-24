<div class="span11">
			<?php echo $form->labelEx($model,'Estado'); ?>
			<?php echo $form->dropDownList(c,'idEstado', CHtml::listData(Estado::model()->findAll(),'idEstado','descripcionE'), array(
				'ajax' => array(
					'type' => 'POST',
					'url' => CController::createUrl('Visitante/selectMunicipio'),
					'update' => "#Visitante_fkMunicipio",			

				), 'prompt' => 'Seleccione un Estado...'
			)); ?>
			<?php echo $form->error($model,'Estado'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx($model,'fkMunicipio'); ?>
			<?php echo $form->dropDownList($model,'fkMunicipio',array(
        'prompt' => 'Seleccione un Municipio...'
        )
		); ?>
			<?php echo $form->error($model,'fkMunicipio'); ?>
		</div>

		<div class="span11">
			<?php echo $form->labelEx($model,'fkMunicipio'); ?>
			<?php echo $form->dropDownList($model,'fkMunicipio', $model->getMenuMunicipio(),array("empty"=>"--",'class'=>'span12')); ?>
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
