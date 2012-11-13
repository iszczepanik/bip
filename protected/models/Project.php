<?php

/**
 * This is the model class for table "prj".
 *
 * The followings are the available columns in table 'prj':
 * @property integer $PRJ_ID
 * @property string $PRJ_DESCRIPTION
 * @property double $PRJ_AMOUNT_DONATION
 * @property double $PRJ_AMOUNT_PUBLIC
 * @property string $PRJ_SOURCES
 * @property integer $PRJ_CAT
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'prj';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRJ_DESCRIPTION, PRJ_SOURCES, PRJ_CAT', 'required'),
			array('PRJ_CAT', 'numerical', 'integerOnly'=>true),
			array('PRJ_AMOUNT_DONATION, PRJ_AMOUNT_PUBLIC', 'numerical'),
			array('PRJ_DESCRIPTION, PRJ_SOURCES', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PRJ_ID, PRJ_DESCRIPTION, PRJ_AMOUNT_DONATION, PRJ_AMOUNT_PUBLIC, PRJ_SOURCES, PRJ_CAT', 'safe', 'on'=>'search'),
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
			'PRJ_ID' => '#',
			'PRJ_DESCRIPTION' => 'Opis',
			'PRJ_AMOUNT_DONATION' => 'Kwota darowizny',
			'PRJ_AMOUNT_PUBLIC' => 'Kwota środków publicznych',
			'PRJ_SOURCES' => 'Źródła',
			'PRJ_CAT' => 'Kategoria',
		);
	}
	
	public function GetTypeDescription()
	{
		return ProjectType::GetDescription($this->PRJ_CAT);
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

		$criteria->compare('PRJ_ID',$this->PRJ_ID);
		$criteria->compare('PRJ_DESCRIPTION',$this->PRJ_DESCRIPTION,true);
		$criteria->compare('PRJ_AMOUNT_DONATION',$this->PRJ_AMOUNT_DONATION);
		$criteria->compare('PRJ_AMOUNT_PUBLIC',$this->PRJ_AMOUNT_PUBLIC);
		$criteria->compare('PRJ_SOURCES',$this->PRJ_SOURCES,true);
		$criteria->compare('PRJ_CAT',$this->PRJ_CAT);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}