<?php

/**
 * This is the model class for table "inf_hist".
 *
 * The followings are the available columns in table 'inf_hist':
 * @property integer $INF_HIST_ID
 * @property integer $INF_HIST_INF_ID
 * @property string $INF_CONTENT
 * @property string $INF_MODIFY_DATE
 * @property integer $INF_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Inf $iNFHISTINF
 * @property Usr $iNFMODIFYBY
 */
class InformationHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InformationHistory the static model class
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
		return 'inf_hist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('INF_HIST_INF_ID, INF_CONTENT, INF_MODIFY_DATE, INF_MODIFY_BY', 'required'),
			array('INF_HIST_INF_ID, INF_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('INF_HIST_ID, INF_HIST_INF_ID, INF_CONTENT, INF_MODIFY_DATE, INF_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'Information' => array(self::BELONGS_TO, 'Information', 'INF_HIST_INF_ID'),
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'INF_MODIFY_BY'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'INF_HIST_ID' => 'Inf Hist',
			'INF_HIST_INF_ID' => 'Inf Hist Inf',
			'INF_CONTENT' => 'Inf Content',
			'INF_MODIFY_DATE' => 'Data modyfikacji',
			'INF_MODIFY_BY' => 'Zmodyfikował',
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

		$criteria->compare('INF_HIST_ID',$this->INF_HIST_ID);
		$criteria->compare('INF_HIST_INF_ID',$this->INF_HIST_INF_ID);
		$criteria->compare('INF_CONTENT',$this->INF_CONTENT,true);
		$criteria->compare('INF_MODIFY_DATE',$this->INF_MODIFY_DATE,true);
		$criteria->compare('INF_MODIFY_BY',$this->INF_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}