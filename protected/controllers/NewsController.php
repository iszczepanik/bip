<?php

class NewsController extends Controller
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
				'actions'=>array('index','view','announcements'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('News', array(
			'criteria'=>array(
				'condition'=>'NWS_BIP = 0 AND NWS_APP_ID='.Yii::app()->request->subdomainAppId,
				'order'=>'NWS_DATE DESC',
			)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionAnnouncements()
	{
		$dataProvider=new CActiveDataProvider('News', array(
			'criteria'=>array(
				'condition'=>'NWS_BIP = 1 AND NWS_APP_ID='.Yii::app()->request->subdomainAppId,
				'order'=>'NWS_DATE DESC',
			)));
		$this->render('announcements',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=News::model()->find('NWS_ID=:NWS_ID and NWS_APP_ID=:NWS_APP_ID', 
		array(':NWS_ID'=>$id,':NWS_APP_ID'=>Yii::app()->request->subdomainAppId));
		
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
