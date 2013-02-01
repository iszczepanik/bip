<?php

/**
 * This is the model class for table "prj_hist".
 *
 * The followings are the available columns in table 'prj_hist':
 * @property integer $PRJ_HIST_ID
 * @property integer $PRJ_HIST_PRJ_ID
 * @property string $PRJ_NAME
 * @property string $PRJ_DESCRIPTION
 * @property string $PRJ_SHORT_DESCRIPTION
 * @property double $PRJ_AMOUNT_DONATION
 * @property double $PRJ_AMOUNT_PUBLIC
 * @property string $PRJ_SOURCES
 * @property integer $PRJ_CAT
 * @property string $PRJ_MODIFY_DATE
 * @property integer $PRJ_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Usr $pRJMODIFYBY
 * @property Prj $pRJHISTPRJ
 */
class ProjectHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProjectHistory the static model class
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
		return 'prj_hist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRJ_HIST_PRJ_ID, PRJ_DESCRIPTION, PRJ_SOURCES, PRJ_CAT', 'required'),
			array('PRJ_HIST_PRJ_ID, PRJ_CAT, PRJ_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('PRJ_AMOUNT_DONATION, PRJ_AMOUNT_PUBLIC', 'numerical'),
			array('PRJ_NAME, PRJ_SHORT_DESCRIPTION', 'length', 'max'=>256),
			array('PRJ_DESCRIPTION, PRJ_SOURCES', 'length', 'max'=>512),
			array('PRJ_MODIFY_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PRJ_HIST_ID, PRJ_HIST_PRJ_ID, PRJ_NAME, PRJ_DESCRIPTION, PRJ_SHORT_DESCRIPTION, PRJ_AMOUNT_DONATION, PRJ_AMOUNT_PUBLIC, PRJ_SOURCES, PRJ_CAT, PRJ_MODIFY_DATE, PRJ_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'PRJ_MODIFY_BY'),
			'Project' => array(self::BELONGS_TO, 'Project', 'PRJ_HIST_PRJ_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRJ_HIST_ID' => 'Prj Hist',
			'PRJ_HIST_PRJ_ID' => 'Prj Hist Prj',
			'PRJ_NAME' => 'Prj Name',
			'PRJ_DESCRIPTION' => 'Prj Description',
			'PRJ_SHORT_DESCRIPTION' => 'Prj Short Description',
			'PRJ_AMOUNT_DONATION' => 'Prj Amount Donation',
			'PRJ_AMOUNT_PUBLIC' => 'Prj Amount Public',
			'PRJ_SOURCES' => 'Prj Sources',
			'PRJ_CAT' => 'Prj Cat',
			'PRJ_MODIFY_DATE' => 'Data modyfikacji',
			'PRJ_MODIFY_BY' => 'Zmodyfikował',
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

		$criteria->compare('PRJ_HIST_ID',$this->PRJ_HIST_ID);
		$criteria->compare('PRJ_HIST_PRJ_ID',$this->PRJ_HIST_PRJ_ID);
		$criteria->compare('PRJ_NAME',$this->PRJ_NAME,true);
		$criteria->compare('PRJ_DESCRIPTION',$this->PRJ_DESCRIPTION,true);
		$criteria->compare('PRJ_SHORT_DESCRIPTION',$this->PRJ_SHORT_DESCRIPTION,true);
		$criteria->compare('PRJ_AMOUNT_DONATION',$this->PRJ_AMOUNT_DONATION);
		$criteria->compare('PRJ_AMOUNT_PUBLIC',$this->PRJ_AMOUNT_PUBLIC);
		$criteria->compare('PRJ_SOURCES',$this->PRJ_SOURCES,true);
		$criteria->compare('PRJ_CAT',$this->PRJ_CAT);
		$criteria->compare('PRJ_MODIFY_DATE',$this->PRJ_MODIFY_DATE,true);
		$criteria->compare('PRJ_MODIFY_BY',$this->PRJ_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}