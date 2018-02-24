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
		/*if (isset($_GET["reporte"])) {
			$model=Visita::model()->findAll("fecha=?",array(date('Y-m-d')));
			$content=$this->renderPartial("reporte",array("model"=>$model),true);
			Yii::app()->request->sendFile("reporteVisita.doc",$content);
		}*/	

		$model=new Visita('search');
		$model->unsetAttributes();  // clear any default values
		$modelR = new Relacion;


		if(isset($_GET['Visita']))
			$model->attributes=$_GET['Visita'];

		if(isset($_POST['Visita']))
		{
			$model->attributes=$_POST['Visita'];
			$model->fkRelVte = $_POST['Visitante']['idVisitante'];
			$model->fkRelAdol = $_POST['Adolescente']['idAdolescente'];
			$modelR->fkVisitante = $_POST['Visitante']['idVisitante'];
			$modelR->fkAdolescente = $_POST['Adolescente']['idAdolescente'];
			$modelR->fkRol = $_POST['Rol']['idRol'];
			#$modelR->fkRol = '4';			
			$modelR->save();
			
			if($model->save())
				$this->redirect(array('admin'));
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