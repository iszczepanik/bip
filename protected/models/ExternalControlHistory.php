<?php

/**
 * This is the model class for table "ctrl_hist".
 *
 * The followings are the available columns in table 'ctrl_hist':
 * @property integer $CTRL_HIST_ID
 * @property integer $CTRL_HIST_CTRL_ID
 * @property integer $CTRL_YEAR
 * @property string $CTRL_NAME
 * @property string $CTRL_INSTITUTION
 * @property string $CTRL_DATE_START
 * @property string $CTRL_DATE_END
 * @property string $CTRL_SCOPE
 * @property string $CTRL_MODIFY_DATE
 * @property integer $CTRL_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Usr $cTRLMODIFYBY
 * @property Ctrl $cTRLHISTCTRL
 */
class ExternalControlHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExternalControlHistory the static model class
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
		return 'ctrl_hist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CTRL_HIST_CTRL_ID, CTRL_YEAR, CTRL_NAME, CTRL_INSTITUTION, CTRL_DATE_START, CTRL_DATE_END, CTRL_SCOPE, CTRL_MODIFY_DATE, CTRL_MODIFY_BY', 'required'),
			array('CTRL_HIST_CTRL_ID, CTRL_YEAR, CTRL_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('CTRL_NAME, CTRL_INSTITUTION', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CTRL_HIST_ID, CTRL_HIST_CTRL_ID, CTRL_YEAR, CTRL_NAME, CTRL_INSTITUTION, CTRL_DATE_START, CTRL_DATE_END, CTRL_SCOPE, CTRL_MODIFY_DATE, CTRL_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'CTRL_MODIFY_BY'),
			'ExternalControl' => array(self::BELONGS_TO, 'ExternalControl', 'CTRL_HIST_CTRL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CTRL_HIST_ID' => 'Ctrl Hist',
			'CTRL_HIST_CTRL_ID' => 'Ctrl Hist Ctrl',
			'CTRL_YEAR' => 'Rok',
			'CTRL_NAME' => 'Tytuł',
			'CTRL_INSTITUTION' => 'Nazwa instytucji przeprowadzającej kontrolę',
			'CTRL_DATE_START' => 'Od',
			'CTRL_DATE_END' => 'Do',
			'CTRL_SCOPE' => 'Zakres kontroli',
			'CTRL_MODIFY_DATE' => 'Data modyfikacji',
			'CTRL_MODIFY_BY' => 'Zmodyfikował',
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

		$criteria->compare('CTRL_HIST_ID',$this->CTRL_HIST_ID);
		$criteria->compare('CTRL_HIST_CTRL_ID',$this->CTRL_HIST_CTRL_ID);
		$criteria->compare('CTRL_YEAR',$this->CTRL_YEAR);
		$criteria->compare('CTRL_NAME',$this->CTRL_NAME,true);
		$criteria->compare('CTRL_INSTITUTION',$this->CTRL_INSTITUTION,true);
		$criteria->compare('CTRL_DATE_START',$this->CTRL_DATE_START,true);
		$criteria->compare('CTRL_DATE_END',$this->CTRL_DATE_END,true);
		$criteria->compare('CTRL_SCOPE',$this->CTRL_SCOPE,true);
		$criteria->compare('CTRL_MODIFY_DATE',$this->CTRL_MODIFY_DATE,true);
		$criteria->compare('CTRL_MODIFY_BY',$this->CTRL_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}