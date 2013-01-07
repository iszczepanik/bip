<?php

/**
 * This is the model class for table "fil_hist".
 *
 * The followings are the available columns in table 'fil_hist':
 * @property integer $FIL_HIST_ID
 * @property integer $FIL_HIST_FIL_ID
 * @property string $FIL_NAME
 * @property string $FIL_CONTENT
 * @property string $FIL_MODIFY_DATE
 * @property integer $FIL_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Usr $fILMODIFYBY
 * @property Fil $fILHISTFIL
 */
class FileHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FileHistory the static model class
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
		return 'fil_hist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIL_HIST_FIL_ID, FIL_NAME, FIL_CONTENT, FIL_MODIFY_DATE, FIL_MODIFY_BY', 'required'),
			array('FIL_HIST_FIL_ID, FIL_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('FIL_NAME', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FIL_HIST_ID, FIL_HIST_FIL_ID, FIL_NAME, FIL_CONTENT, FIL_MODIFY_DATE, FIL_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'FIL_MODIFY_BY'),
			'File' => array(self::BELONGS_TO, 'File', 'FIL_HIST_FIL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FIL_HIST_ID' => 'Fil Hist',
			'FIL_HIST_FIL_ID' => 'Fil Hist Fil',
			'FIL_NAME' => 'Plik',
			'FIL_CONTENT' => 'Fil Content',
			'FIL_MODIFY_DATE' => 'Data modyfikacji',
			'FIL_MODIFY_BY' => 'Zmodyfikował',
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

		$criteria->compare('FIL_HIST_ID',$this->FIL_HIST_ID);
		$criteria->compare('FIL_HIST_FIL_ID',$this->FIL_HIST_FIL_ID);
		$criteria->compare('FIL_NAME',$this->FIL_NAME,true);
		$criteria->compare('FIL_CONTENT',$this->FIL_CONTENT,true);
		$criteria->compare('FIL_MODIFY_DATE',$this->FIL_MODIFY_DATE,true);
		$criteria->compare('FIL_MODIFY_BY',$this->FIL_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}