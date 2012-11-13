<?php

/**
 * This is the model class for table "fil".
 *
 * The followings are the available columns in table 'fil':
 * @property integer $FIL_ID
 * @property string $FIL_NAME
 * @property string $FIL_PATH
 * @property integer $FIL_CAT
 * @property string $FIL_CREATE_DATE
 * @property string $FIL_CREATE_BY
 * @property string $FIL_MODIFY_DATE
 * @property string $FIL_MODIFY_BY
 */
class File extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return File the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIL_NAME, FIL_PATH', 'required'),
			array('FIL_CAT', 'numerical', 'integerOnly'=>true),
			array('FIL_NAME, FIL_PATH', 'length', 'max'=>256),
			array('FIL_CREATE_DATE, FIL_CREATE_BY, FIL_MODIFY_DATE, FIL_MODIFY_BY', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FIL_ID, FIL_NAME, FIL_PATH, FIL_CAT, FIL_CREATE_DATE, FIL_CREATE_BY, FIL_MODIFY_DATE, FIL_MODIFY_BY', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FIL_ID' => 'Fil',
			'FIL_NAME' => 'Fil Name',
			'FIL_PATH' => 'Fil Path',
			'FIL_CAT' => 'Fil Cat',
			'FIL_CREATE_DATE' => 'Fil Create Date',
			'FIL_CREATE_BY' => 'Fil Create By',
			'FIL_MODIFY_DATE' => 'Fil Modify Date',
			'FIL_MODIFY_BY' => 'Fil Modify By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('FIL_ID',$this->FIL_ID);
		$criteria->compare('FIL_NAME',$this->FIL_NAME,true);
		$criteria->compare('FIL_PATH',$this->FIL_PATH,true);
		$criteria->compare('FIL_CAT',$this->FIL_CAT);
		$criteria->compare('FIL_CREATE_DATE',$this->FIL_CREATE_DATE,true);
		$criteria->compare('FIL_CREATE_BY',$this->FIL_CREATE_BY,true);
		$criteria->compare('FIL_MODIFY_DATE',$this->FIL_MODIFY_DATE,true);
		$criteria->compare('FIL_MODIFY_BY',$this->FIL_MODIFY_BY,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}