<?php
class WebUser extends CWebUser {
 
	// Store model to not repeat query.
	private $_model;
	
	public function getUserWholeName()
	{
		if ($this->_model===null)
		{
			$this->_model=User::model()->findByPk(Yii::app()->user->id);
		}
		return $this->_model===null ? "" : $this->_model->WholeName();
	}
}
?>