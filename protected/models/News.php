<?php

/**
 * This is the model class for table "nws".
 *
 * The followings are the available columns in table 'nws':
 * @property integer $NWS_ID
 * @property string $NWS_DATE
 * @property string $NWS_TITLE
 * @property string $NWS_CONTENT
 * @property integer $NWS_BIP
 */
class News extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
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
		return 'nws';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NWS_DATE, NWS_TITLE, NWS_CONTENT', 'required'),
			array('NWS_BIP', 'numerical', 'integerOnly'=>true),
			array('NWS_TITLE', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NWS_ID, NWS_DATE, NWS_TITLE, NWS_CONTENT, NWS_BIP', 'safe', 'on'=>'search'),
		);
	}
	
	public function GetNewsCount()
	{
		return Yii::app()->db->createCommand('SELECT count(*) FROM `nws`')->queryScalar();
	}
	
	public function GetBrief()
	{
		$pagebreak = "<!-- pagebreak -->";
		$pieces = explode($pagebreak, $this->NWS_CONTENT);
		return strip_tags($pieces[0]);
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
			'NWS_ID' => '#',
			'NWS_DATE' => 'Data',
			'NWS_TITLE' => 'Tytuł',
			'NWS_CONTENT' => 'Treść',
			'NWS_BIP' => 'Pokazuj znaczek "Bip"',
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

		$criteria->compare('NWS_ID',$this->NWS_ID);
		$criteria->compare('NWS_DATE',$this->NWS_DATE,true);
		$criteria->compare('NWS_TITLE',$this->NWS_TITLE,true);
		$criteria->compare('NWS_CONTENT',$this->NWS_CONTENT,true);
		$criteria->compare('NWS_BIP',$this->NWS_BIP);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}