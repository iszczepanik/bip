<?php

/**
 * This is the model class for table "fin".
 *
 * The followings are the available columns in table 'fin':
 * @property integer $FIN_ID
 * @property integer $FIN_TYPE
 * @property integer $FIN_SOURCE
 * @property integer $FIN_YEAR
 * @property double $FIN_AMOUNT
 * @property string $FIN_FROM
 * @property integer $FIN_PRJ_ID
 * @property string $FIN_CREATE_DATE
 * @property integer $FIN_CREATE_BY
 * @property string $FIN_MODIFY_DATE
 * @property integer $FIN_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Usr $fINMODIFYBY
 * @property Prj $fINPRJ
 * @property Usr $fINCREATEBY
 * @property FinHist[] $finHists
 */
class Finance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Finance the static model class
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
		return 'fin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIN_TYPE, FIN_SOURCE, FIN_YEAR, FIN_AMOUNT, FIN_CREATE_DATE, FIN_CREATE_BY', 'required'),
			array('FIN_TYPE, FIN_SOURCE, FIN_YEAR, FIN_PRJ_ID, FIN_CREATE_BY, FIN_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('FIN_AMOUNT', 'numerical'),
			array('FIN_FROM', 'length', 'max'=>256),
			array('FIN_MODIFY_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FIN_ID, FIN_TYPE, FIN_SOURCE, FIN_YEAR, FIN_AMOUNT, FIN_FROM, FIN_PRJ_ID, FIN_CREATE_DATE, FIN_CREATE_BY, FIN_MODIFY_DATE, FIN_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'Project' => array(self::BELONGS_TO, 'Project', 'FIN_PRJ_ID'),
			'History' => array(self::HAS_MANY, 'FinanceHistory', 'FIN_HIST_FIN_ID'),
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'FIN_MODIFY_BY'),
			'CreateBy' => array(self::BELONGS_TO, 'User', 'FIN_CREATE_BY'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FIN_ID' => '#',
			'FIN_TYPE' => 'Kategoria',
			'FIN_SOURCE' => 'Typ',
			'FIN_YEAR' => 'Rok',
			'FIN_AMOUNT' => 'Kwota',
			'FIN_FROM' => 'Źródło',
			'FIN_PRJ_ID' => 'Projekt',
			'FIN_CREATE_DATE' => 'Fin Create Date',
			'FIN_CREATE_BY' => 'Fin Create By',
			'FIN_MODIFY_DATE' => 'Fin Modify Date',
			'FIN_MODIFY_BY' => 'Fin Modify By',
		);
	}

	public function GetTypeDescription()
	{
		return FinanceType::GetDescription($this->FIN_TYPE);
	}
	
	public function GetSourceDescription()
	{
		return FinanceSource::GetDescription($this->FIN_SOURCE);
	}
	
	public function GetHistoryProvider()
	{
		$params[':FIN_HIST_FIN_ID'] = $this->FIN_ID;
		$condition = "FIN_HIST_FIN_ID = :FIN_HIST_FIN_ID";
		
		$criteria = new CDbCriteria(array(
			'condition'=>$condition,
			'params'=>$params
		));
	
		$dataProvider = new CActiveDataProvider('FinanceHistory', array(
			'criteria'=>$criteria,
		));
			
		return $dataProvider;
	}
	
	public function GetLink()
	{
		$inf = Information::FindByFinanceType($this->FIN_TYPE);
		return $inf->Link;
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

		$criteria->compare('FIN_ID',$this->FIN_ID);
		$criteria->compare('FIN_TYPE',$this->FIN_TYPE);
		$criteria->compare('FIN_SOURCE',$this->FIN_SOURCE);
		$criteria->compare('FIN_YEAR',$this->FIN_YEAR);
		$criteria->compare('FIN_AMOUNT',$this->FIN_AMOUNT);
		$criteria->compare('FIN_FROM',$this->FIN_FROM,true);
		$criteria->compare('FIN_PRJ_ID',$this->FIN_PRJ_ID);
		$criteria->compare('FIN_CREATE_DATE',$this->FIN_CREATE_DATE,true);
		$criteria->compare('FIN_CREATE_BY',$this->FIN_CREATE_BY);
		$criteria->compare('FIN_MODIFY_DATE',$this->FIN_MODIFY_DATE,true);
		$criteria->compare('FIN_MODIFY_BY',$this->FIN_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}