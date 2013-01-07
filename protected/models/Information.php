<?php

/**
 * This is the model class for table "inf".
 *
 * The followings are the available columns in table 'inf':
 * @property integer $INF_ID
 * @property string $INF_NAME
 * @property string $INF_CONTENT
 * @property integer $INF_OBLIGATORY
 * @property integer $INF_SHOW
 * @property integer $INF_BIP
 * @property integer $INF_SIT_ID
 * @property integer $INF_TYPE
 * @property integer $INF_INF_ID
 * @property integer $INF_SHOW_PRJ_CAT
 * @property integer $INF_SHOW_FILE_CAT
 * @property integer $INF_SHOW_FIN_TYPE
 * @property string $INF_CREATE_DATE
 * @property integer $INF_CREATE_BY
 * @property string $INF_MODIFY_DATE
 * @property integer $INF_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Sit $iNFSIT
 * @property Usr $iNFCREATEBY
 * @property Usr $iNFMODIFYBY
 * @property InfHist[] $infHists
 */
class Information extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Information the static model class
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
		return 'inf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('INF_CONTENT, INF_SIT_ID, INF_CREATE_DATE, INF_CREATE_BY', 'required'),
			array('INF_OBLIGATORY, INF_SHOW, INF_BIP, INF_SIT_ID, INF_TYPE, INF_INF_ID, INF_SHOW_PRJ_CAT, INF_SHOW_FILE_CAT, INF_SHOW_FIN_TYPE, INF_CREATE_BY, INF_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('INF_NAME', 'length', 'max'=>256),
			array('INF_MODIFY_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('INF_ID, INF_NAME, INF_CONTENT, INF_OBLIGATORY, INF_SHOW, INF_BIP, INF_SIT_ID, INF_TYPE, INF_INF_ID, INF_SHOW_PRJ_CAT, INF_SHOW_FILE_CAT, INF_SHOW_FIN_TYPE, INF_CREATE_DATE, INF_CREATE_BY, INF_MODIFY_DATE, INF_MODIFY_BY', 'safe', 'on'=>'search'),
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
			'Parent' => array(self::BELONGS_TO, 'Information', 'INF_INF_ID'),
			'Informations' => array(self::HAS_MANY, 'Information', 'INF_INF_ID'),
			'Site' => array(self::BELONGS_TO, 'Site', 'INF_SIT_ID'),
			'iNFCREATEBY' => array(self::BELONGS_TO, 'User', 'INF_CREATE_BY'),
			'iNFMODIFYBY' => array(self::BELONGS_TO, 'User', 'INF_MODIFY_BY'),
			'History' => array(self::HAS_MANY, 'InformationHistory', 'INF_HIST_INF_ID'),
		);
	}
	
	public function GetHistoryProvider()
	{
		$params[':INF_HIST_INF_ID'] = $this->INF_ID;
		$condition = "INF_HIST_INF_ID = :INF_HIST_INF_ID";
		
		$criteria = new CDbCriteria(array(
			'condition'=>$condition,
			'params'=>$params
		));
	
		$dataProvider = new CActiveDataProvider('InformationHistory', array(
			'criteria'=>$criteria,
		));
			
		return $dataProvider;
	}

	public function GetInformationsLevel0()
	{
		if(count($this->Informations) > 0)
		{
			$criteria = new CDbCriteria;
			$criteria->condition='INF_INF_ID='.$this->INF_ID;
			return Information::model()->findAll($criteria);
		}
		
		return array();
	}
	
	public function GetProjects()
	{
		if ($this->INF_SHOW_PRJ_CAT != '')
		{
			$criteria = new CDbCriteria;
			$criteria->condition='PRJ_CAT='.$this->INF_SHOW_PRJ_CAT;
			return Project::model()->findAll($criteria);
		}
		
		return array();
	}
	
	public function GetFiles()
	{
		if ($this->INF_SHOW_FILE_CAT != '')
		{
			$criteria = new CDbCriteria;
			$criteria->condition='FIL_CAT='.$this->INF_SHOW_FILE_CAT;
			return File::model()->findAll($criteria);
		}
		
		return array();
	}
	
	public function GetFinances()
	{
		if ($this->INF_SHOW_FIN_TYPE != '')
		{
			$criteria = new CDbCriteria;
			$criteria->condition='FIN_TYPE='.$this->INF_SHOW_FIN_TYPE;
			$criteria->order='FIN_YEAR DESC, FIN_SOURCE';
			return Finance::model()->findAll($criteria);
		}
		
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'INF_ID' => 'Inf',
			'INF_NAME' => 'Inf Name',
			'INF_CONTENT' => 'Treść',
			'INF_OBLIGATORY' => 'Inf Obligatory',
			'INF_SHOW' => 'Pokazuj tą informację',
			'INF_BIP' => 'Pokazuj Bip',
			'INF_SIT_ID' => 'Inf Sit',
			'INF_TYPE' => 'Inf Type',
			'INF_INF_ID' => 'Inf Inf',
			'INF_SHOW_PRJ_CAT' => 'Inf Show Prj Cat',
			'INF_SHOW_FILE_CAT' => 'Inf Show File Cat',
			'INF_SHOW_FIN_TYPE' => 'Inf Show Fin Type',
			'INF_CREATE_DATE' => 'Inf Create Date',
			'INF_CREATE_BY' => 'Inf Create By',
			'INF_MODIFY_DATE' => 'Inf Modify Date',
			'INF_MODIFY_BY' => 'Inf Modify By',
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

		$criteria->compare('INF_ID',$this->INF_ID);
		$criteria->compare('INF_NAME',$this->INF_NAME,true);
		$criteria->compare('INF_CONTENT',$this->INF_CONTENT,true);
		$criteria->compare('INF_OBLIGATORY',$this->INF_OBLIGATORY);
		$criteria->compare('INF_SHOW',$this->INF_SHOW);
		$criteria->compare('INF_BIP',$this->INF_BIP);
		$criteria->compare('INF_SIT_ID',$this->INF_SIT_ID);
		$criteria->compare('INF_TYPE',$this->INF_TYPE);
		$criteria->compare('INF_INF_ID',$this->INF_INF_ID);
		$criteria->compare('INF_SHOW_PRJ_CAT',$this->INF_SHOW_PRJ_CAT);
		$criteria->compare('INF_SHOW_FILE_CAT',$this->INF_SHOW_FILE_CAT);
		$criteria->compare('INF_SHOW_FIN_TYPE',$this->INF_SHOW_FIN_TYPE);
		$criteria->compare('INF_CREATE_DATE',$this->INF_CREATE_DATE,true);
		$criteria->compare('INF_CREATE_BY',$this->INF_CREATE_BY);
		$criteria->compare('INF_MODIFY_DATE',$this->INF_MODIFY_DATE,true);
		$criteria->compare('INF_MODIFY_BY',$this->INF_MODIFY_BY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}