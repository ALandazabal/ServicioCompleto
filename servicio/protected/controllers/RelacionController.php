<?php

class RelacionController extends Controller
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
		}		
		*/
		$relaciones=Relacion::model()->findAll();
		$model=new Relacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Relacion']))
			$model->attributes=$_GET['Relacion'];

		$this->render('admin',array(
			'model'=>$model,
			'relacion'=>$relaciones,
		));	
	}

	public function actionConsulta($id){
		$relaciones=Relacion::model()->find('fkVisitante=:fkVisitante',
										array(':fkVisitante'=>$id));
		$adol=$relaciones->visitas1;
		$this->render('visitanteDetalle',array(
			'relacion'=>$relaciones,
			'adoles'=>$adol,
		));
	}

	public function actionBuscar(){
		$model = new BuscarVisitaForm;
		$form = new CForm('views.relacion.visitanteBuscar',$model);
		if($form->submitted('buscar') && $form->validate()){
			$nombre = $model->nombre;
			$this->redirect(array('resultados'."&nombre=".$nombre));
		}else
			$this->render('visitanteForm',array(
				'form'=>$form,
			));
	}

	public function actionResultados($nombre){
		$relaciones=Relacion::model()->find('fkVisitante LIKE :fkVisitante',
								array(':fkVisitante'=>'%'.$fkVisitante.'%'));
		$adoles=$relaciones->visitas1;
		$this->render('visitanteDetalle',array(
			'relacion'=>$relaciones,
			'adols'=>$adoles,
		));
	}/**/

	public function actionCreate()
	{
		$model=new Relacion;

		if(isset($_POST['Relacion']))
		{
			$model->attributes=$_POST['Relacion'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create', array('model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Relacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='relacion-form')
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