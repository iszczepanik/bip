<?php

/**
 * This is the model class for table "fin_hist".
 *
 * The followings are the available columns in table 'fin_hist':
 * @property integer $FIN_HIST_ID
 * @property integer $FIN_HIST_FIN_ID
 * @property double $FIN_AMOUNT
 * @property string $FIN_MODIFY_DATE
 * @property integer $FIN_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Usr $fINMODIFYBY
 * @property Fin $fINHISTFIN
 */
class FinanceHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FinanceHistory the static model class
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
		return 'fin_hist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIN_HIST_FIN_ID, FIN_AMOUNT, FIN_MODIFY_DATE, FIN_MODIFY_BY', 'required'),
			array('FIN_HIST_FIN_ID, FIN_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('FIN_AMOUNT', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FIN_HIST_ID, FIN_HIST_FIN_ID, FIN_AMOUNT, FIN_MODIFY_DATE, FIN_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'FIN_MODIFY_BY'),
			'Finance' => array(self::BELONGS_TO, 'Finance', 'FIN_HIST_FIN_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FIN_HIST_ID' => '#',
			'FIN_HIST_FIN_ID' => 'Fin Hist Fin',
			'FIN_AMOUNT' => 'Kwota',
			'FIN_MODIFY_DATE' => 'Data modyfikacji',
			'FIN_MODIFY_BY' => 'Zmodyfikował',
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

		$criteria->compare('FIN_HIST_ID',$this->FIN_HIST_ID);
		$criteria->compare('FIN_HIST_FIN_ID',$this->FIN_HIST_FIN_ID);
		$criteria->compare('FIN_AMOUNT',$this->FIN_AMOUNT);
		$criteria->compare('FIN_MODIFY_DATE',$this->FIN_MODIFY_DATE,true);
		$criteria->compare('FIN_MODIFY_BY',$this->FIN_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}