<?php

class FileHistoryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','view'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	function actionView($id)
	{
		$model = $this->loadModel($id);
		$filecontent = $model->FIL_CONTENT;//file_get_contents('path_to_file'.$name);
		header("Content-Type: application/pdf");
		header("Content-disposition: inline; filename=plik.pdf");
		header("Pragma: no-cache");
		echo $filecontent;
		exit;
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FileHistory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FileHistory']))
			$model->attributes=$_GET['FileHistory'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=FileHistory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='file-history-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
