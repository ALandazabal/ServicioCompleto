<?php

class VisitaController extends Controller
{
	public $layout='//layouts/column2';
	public $defaultAction ='admin';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','create','update','view','MunByEst'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','view','MunByEst'),
				'users'=>array('20626929'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionAdmin()
	{
		if (isset($_GET["reporte"])) {
			$model=Visita::model()->findAll("fecha=?",array(date('Y-m-d')));
			$content=$this->renderPartial("reporte",array("model"=>$model),true);
			Yii::app()->request->sendFile("reporteVisita.doc",$content);
		}/**/	

		$model=new Visita('search');
		$model->unsetAttributes();  // clear any default values
		$modelR = new Relacion;
		$modelVte = CHtml::listData(Visitante::model()->findAll(),"idVisitante","idVisitante");
		$modelAte = CHtml::listData(Adolescente::model()->findAll(),"idAdolescente","idAdolescente");
		$modelRel = Relacion::model()->findAll();
		$bandv = 0;
		$banda = 0;
		$bandr = 0;


		if(isset($_GET['Visita']))
			$model->attributes=$_GET['Visita'];

		if(isset($_POST['Visita']))
		{
			$model->attributes=$_POST['Visita'];
			//$model->fecha = $_POST['Visita']['fecha'];
			$model->fkRelVte = $_POST['Visitante']['idVisitante'];
			$model->fkRelAdol = $_POST['Adolescente']['idAdolescente'];
			$modelR->fkVisitante = $_POST['Visitante']['idVisitante'];
			$modelR->fkAdolescente = $_POST['Adolescente']['idAdolescente'];
			$modelR->fkRol = $_POST['Rol']['idRol'];
			#$modelR->fkRol = '4';			
			
			foreach($modelVte as $visitante){
				if($visitante == $_POST['Visitante']['idVisitante']){
					$bandv = 1;
					//echo "Valor ".$_POST['Visitante']['idVisitante'];
					foreach($modelAte as $adolescente){
						if($adolescente == $_POST['Adolescente']['idAdolescente']){
							$banda = 1;
							foreach($modelRel as $relacion){
								if($visitante == $relacion->fkVisitante && $adolescente == $relacion->fkAdolescente){
									//echo "->".$relacion->fkRol;
									$bandr = 1;	
									$model->save();
									$this->redirect(array('admin'));								
								}
							}
						}
					}

				}//else{
					//$this->redirect('create');					
				//}
			}

			if($bandv == 0)
				$this->redirect(array('Visitante/create'));
			if($banda == 0)
				$this->redirect(array('Adolescente/create'));
			if($bandr == 0){
				if($modelR->save()){
					$model->save();
					$this->redirect(array('admin'));
				}
			}
				
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCreate()
	{
		$model=new Visita;
		$modelR = new Relacion;

		if(isset($_POST['Visita']))
		{
			$modelR->fkVisitante = '212121';
			$modelR->fkAdolescente = '212121';
			#$modelR->fkVisitante = $model->fkRelVte;
			#$modelR->fkAdolescente = $model->fkRelAdol;
			$modelR->fkRol = '4';			
			$modelR->save();
			$model->attributes=$_POST['Visita'];

			if($model->save())
				$this->redirect(array('view','model'=>$model));
		}

		$this->render('create', array('model'=>$model,
		));
	}
	public function actionUpdate($fecha, $fkRelVte, $fkRelAdol)
	{
		/*echo " ".$fecha." ".$fkRelVte." ".$fkRelAdol;*/

		$model=$this->loadModelU($fecha, $fkRelVte, $fkRelAdol);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		date_default_timezone_set('America/Caracas');
		$h_salida = date("g:i:s");
		
		$model->h_salida = $h_salida;
		if($model->save()){
			//echo "<script>console.log( 'Debug Objects: ".$model->h_salida."' );</script>";
			$this->redirect(array('admin'));
		}
		
		/*$this->render('update',array(
			'model'=>$model,
		));*/
	}

	/*
	public function actionUpdate($fecha, $fkRelVte, $fkRelAdol)
	{
		/*echo " ".$fecha." ".$fkRelVte." ".$fkRelAdol;*/

	/*	$model=$this->loadModelU($fecha, $fkRelVte, $fkRelAdol);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Visita']))
		{
			$model->attributes=$_POST['Visita'];
			$model->h_salida = '10:14:19.00000';
			if($model->save()){

				echo "<script>console.log( 'Debug Objects: ".$model->h_entrada."' );</script>";
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));/**/
	/*}*/

	public function loadModelU($fecha, $fkRelVte, $fkRelAdol)
	{
		/*$criteria=new CDbCriteria;     
$criteria->condition='userid=:userId AND status=:Status';
$criteria->params=array(':userId'=>10,':Status'=>'A');
$model=User::model()->find($criteria);*/

		$criteria = new CDbCriteria;
		$criteria->condition='fecha=:Fecha AND fkRelVte=:FkRelVte AND fkRelAdol=:FkRelAdol';
		$criteria->params=array(':Fecha' =>$fecha ,':FkRelVte' =>$fkRelVte ,':FkRelAdol' =>$fkRelAdol);
		$model=Visita::model()->find($criteria);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');/**/
		return $model;
	}

	public function loadModel($id)
	{
		$model=Visita::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='visita-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}