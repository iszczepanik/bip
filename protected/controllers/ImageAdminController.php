<?php

class ImageAdminController extends Controller
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
				'actions'=>array('index','view','download','create','update','admin','delete'),
				'roles'=>array('admin'),
			),
		);
	}

	public function actionUpload()
    {
        $model = new Image;
        if(isset($_POST['Image']))
        {
            $model->attributes=$_POST['Image'];
            $model->image = CUploadedFile::getInstance($model,'image');
            if($model->save())
            {
				$this->redirect(array('Sites/view','id'=>1));
                // redirect to success page
            }
        }
        $this->render('upload', array('model'=>$model));
    }

}
