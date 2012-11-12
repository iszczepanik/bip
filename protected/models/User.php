<?php

/**
 * This is the model class for table "usr".
 *
 * The followings are the available columns in table 'usr':
 * @property integer $USR_ID
 * @property string $USR_NAME
 * @property string $USR_PASS
 * @property string $USR_FIRSTNAME
 * @property string $USR_LASTNAME
 * @property string $USR_EMAIL
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'usr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USR_NAME, USR_PASS', 'length', 'max'=>16),
			array('USR_FIRSTNAME, USR_LASTNAME, USR_EMAIL', 'length', 'max'=>100),
			array('USR_NAME, USR_PASS, USR_FIRSTNAME, USR_LASTNAME, USR_EMAIL', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('USR_ID, USR_NAME, USR_PASS, USR_FIRSTNAME, USR_LASTNAME, USR_EMAIL', 'safe', 'on'=>'search'),
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

	public function WholeName()
	{
		return $this->USR_FIRSTNAME." ".$this->USR_LASTNAME;
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USR_ID' => '#',
			'USR_NAME' => 'Login',
			'USR_PASS' => 'Hasło',
			'USR_FIRSTNAME' => 'Imię',
			'USR_LASTNAME' => 'Nazwisko',
			'USR_EMAIL' => 'Email',
			'USR_WHOLENAME' => 'Imię i nazwisko'
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

		$criteria->compare('USR_ID',$this->USR_ID);
		$criteria->compare('USR_NAME',$this->USR_NAME,true);
		$criteria->compare('USR_PASS',$this->USR_PASS,true);
		$criteria->compare('USR_FIRSTNAME',$this->USR_FIRSTNAME,true);
		$criteria->compare('USR_LASTNAME',$this->USR_LASTNAME,true);
		$criteria->compare('USR_EMAIL',$this->USR_EMAIL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}