<?php

/**
 * This is the model class for table "fil_atch".
 *
 * The followings are the available columns in table 'fil_atch':
 * @property integer $fil_atch_id
 * @property integer $fil_atch_fil_id
 * @property integer $fil_atch_entity_id
 * @property integer $fil_atch_entity_type
 */
class FileAttachment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FileAttachment the static model class
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
		return 'fil_atch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fil_atch_fil_id, fil_atch_entity_id, fil_atch_entity_type', 'required'),
			array('fil_atch_fil_id, fil_atch_entity_id, fil_atch_entity_type', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fil_atch_id, fil_atch_fil_id, fil_atch_entity_id, fil_atch_entity_type', 'safe', 'on'=>'search'),
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
			'File' => array(self::BELONGS_TO, 'File', 'fil_atch_fil_id'),
		);

	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fil_atch_id' => '#',
			'fil_atch_fil_id' => 'Plik',
			'fil_atch_entity_id' => 'Fil Atch Entity',
			'fil_atch_entity_type' => 'Fil Atch Entity Type',
		);
	}
	
	public static function GetFilesByEntity($entity_id, $entity_type)
	{
		$condition = "fil_atch_entity_id = :entity_id and fil_atch_entity_type = :entity_type";
		$params[':entity_id'] = $entity_id;
		$params[':entity_type'] = $entity_type;

		$criteria = new CDbCriteria(array(
				'condition'=>$condition,
				'params'=>$params
			));
		$dataProvider = new CActiveDataProvider('FileAttachment', array(
				'criteria'=>$criteria,
				'pagination'=>false,
			));
			
		return $dataProvider;
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

		$criteria->compare('fil_atch_id',$this->fil_atch_id);
		$criteria->compare('fil_atch_fil_id',$this->fil_atch_fil_id);
		$criteria->compare('fil_atch_entity_id',$this->fil_atch_entity_id);
		$criteria->compare('fil_atch_entity_type',$this->fil_atch_entity_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}