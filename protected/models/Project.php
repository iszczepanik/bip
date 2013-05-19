<?php

/**
 * This is the model class for table "prj".
 *
 * The followings are the available columns in table 'prj':
 * @property integer $PRJ_ID
 * @property string $PRJ_NAME
 * @property string $PRJ_DESCRIPTION
 * @property string $PRJ_SHORT_DESCRIPTION
 * @property double $PRJ_AMOUNT_DONATION
 * @property double $PRJ_AMOUNT_PUBLIC
 * @property string $PRJ_SOURCES
 * @property integer $PRJ_CAT
 * @property string $PRJ_CREATE_DATE
 * @property integer $PRJ_CREATE_BY
 * @property string $PRJ_MODIFY_DATE
 * @property integer $PRJ_MODIFY_BY
 *
 * The followings are the available model relations:
 * @property Fin[] $fins
 * @property Usr $pRJMODIFYBY
 * @property Usr $pRJCREATEBY
 * @property PrjHist[] $prjHists
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

	private $_old;
	
	public function beforeSave()
	{
		$this->_old = Project::model()->findByPk($this->PRJ_ID);
		return parent::beforeSave();
	}
	
	public function afterSave()
	{
		if ($this->_old->PRJ_NAME != $this->PRJ_NAME || 
			$this->_old->PRJ_DESCRIPTION != $this->PRJ_DESCRIPTION || 
			$this->_old->PRJ_SHORT_DESCRIPTION != $this->PRJ_SHORT_DESCRIPTION ||
			$this->_old->PRJ_AMOUNT_DONATION != $this->PRJ_AMOUNT_DONATION || 
			$this->_old->PRJ_AMOUNT_PUBLIC != $this->PRJ_AMOUNT_PUBLIC || 
			$this->_old->PRJ_SOURCES != $this->PRJ_SOURCES ||
			$this->_old->PRJ_CAT != $this->PRJ_CAT)
		{
			$historyEntry = new ProjectHistory;
			
			$historyEntry->PRJ_HIST_PRJ_ID = $this->_old->PRJ_ID;
			$historyEntry->PRJ_NAME = $this->_old->PRJ_NAME;
			$historyEntry->PRJ_DESCRIPTION = $this->_old->PRJ_DESCRIPTION;
			$historyEntry->PRJ_SHORT_DESCRIPTION = $this->_old->PRJ_SHORT_DESCRIPTION;
			$historyEntry->PRJ_AMOUNT_DONATION = $this->_old->PRJ_AMOUNT_DONATION;
			$historyEntry->PRJ_AMOUNT_PUBLIC = $this->_old->PRJ_AMOUNT_PUBLIC;
			$historyEntry->PRJ_SOURCES = $this->_old->PRJ_SOURCES;
			$historyEntry->PRJ_CAT = $this->_old->PRJ_CAT;
			$historyEntry->PRJ_MODIFY_DATE = $this->PRJ_MODIFY_DATE;
			$historyEntry->PRJ_MODIFY_BY = $this->PRJ_MODIFY_BY;
			
			$historyEntry->save();
		}
		
		parent::afterSave();
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRJ_DESCRIPTION, PRJ_SOURCES, PRJ_CAT, PRJ_APP_ID, PRJ_CREATE_DATE, PRJ_CREATE_BY', 'required'),
			array('PRJ_CAT, PRJ_APP_ID, PRJ_CREATE_BY, PRJ_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('PRJ_AMOUNT_DONATION, PRJ_AMOUNT_PUBLIC', 'numerical'),
			array('PRJ_NAME, PRJ_SHORT_DESCRIPTION, PRJ_INFO_CREATED_BY', 'length', 'max'=>256),
			array('PRJ_DESCRIPTION, PRJ_SOURCES', 'length', 'max'=>512),
			array('PRJ_MODIFY_DATE, PRJ_INFO_CREATE_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PRJ_ID, PRJ_NAME, PRJ_DESCRIPTION, PRJ_SHORT_DESCRIPTION, PRJ_AMOUNT_DONATION, PRJ_AMOUNT_PUBLIC, PRJ_SOURCES, PRJ_CAT, PRJ_APP_ID, PRJ_CREATE_DATE, PRJ_CREATE_BY, PRJ_MODIFY_DATE, PRJ_MODIFY_BY, PRJ_INFO_CREATED_BY, PRJ_INFO_CREATE_DATE', 'safe', 'on'=>'search'),
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
			'fins' => array(self::HAS_MANY, 'Fin', 'FIN_PRJ_ID'),
			'pRJMODIFYBY' => array(self::BELONGS_TO, 'Usr', 'PRJ_MODIFY_BY'),
			'CreateBy' => array(self::BELONGS_TO, 'User', 'PRJ_CREATE_BY'),
			'History' => array(self::HAS_MANY, 'ProjectHistory', 'PRJ_HIST_PRJ_ID'),
		);
	}
	
	public function GetHistoryProvider()
	{
		$params[':PRJ_HIST_PRJ_ID'] = $this->PRJ_ID;
		$condition = "PRJ_HIST_PRJ_ID = :PRJ_HIST_PRJ_ID";
		
		$criteria = new CDbCriteria(array(
			'condition'=>$condition,
			'params'=>$params
		));
	
		$dataProvider = new CActiveDataProvider('ProjectHistory', array(
			'criteria'=>$criteria,
		));
			
		return $dataProvider;
	}
	
	public function UserFind($phrase)
	{
		$condition = "PRJ_APP_ID=".Yii::app()->request->subdomainAppId." AND LOWER(PRJ_NAME) like :PHRASE or LOWER(PRJ_SOURCES) like :PHRASE or LOWER(fnStripTags(PRJ_DESCRIPTION)) LIKE :PHRASE";
		$params[':PHRASE'] = '%'.$phrase.'%';

		$criteria = new CDbCriteria(array(
				'condition'=>$condition,
				'params'=>$params
			));
		$criteria->order='PRJ_CAT';

		$dataProvider = new CActiveDataProvider('Project', array(
				'criteria'=>$criteria,
				'pagination'=>false,
			));
			
		return $dataProvider;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRJ_ID' => '#',
			'PRJ_NAME' => 'Tytuł projektu',
			'PRJ_DESCRIPTION' => 'Opis',
			'PRJ_SHORT_DESCRIPTION' => 'Krótki opis',
			'PRJ_AMOUNT_DONATION' => 'Kwota darowizny',
			'PRJ_AMOUNT_PUBLIC' => 'Kwota środków publicznych',
			'PRJ_SOURCES' => 'Źródła',
			'PRJ_CAT' => 'Kategoria',
			'PRJ_APP_ID' => 'App',
			'PRJ_CREATE_DATE' => 'Data udostępnienia informacji w BIP',
			'PRJ_CREATE_BY' => 'Informację wprowadził do BIP',
			'PRJ_MODIFY_DATE' => 'Prj Modify Date',
			'PRJ_MODIFY_BY' => 'Prj Modify By',
			'PRJ_INFO_CREATED_BY' => 'Informację wytworzył lub odpowiada za treść',
			'PRJ_INFO_CREATE_DATE' => 'Data wytworzenia informacji',
			'Podmiot'=>'Podmiot udostępniający informację'
		);
	}

	public function GetTypeDescription()
	{
		return ProjectType::GetDescription($this->PRJ_CAT);
	}
	
	public function GetLink()
	{
		$inf = Information::FindByProjectType($this->PRJ_CAT);
		return $inf->Link."#prj_".$this->PRJ_ID;
	}
	
	public function GetPodmiot()
	{
		return strip_tags(Information::FindByName('Pełna nazwa organizacji'));
	}
	
	public function GetFiles()
	{
		return FileAttachment::GetFilesByEntity($this->PRJ_ID, 1);
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
		$criteria->compare('PRJ_NAME',$this->PRJ_NAME,true);
		$criteria->compare('PRJ_DESCRIPTION',$this->PRJ_DESCRIPTION,true);
		$criteria->compare('PRJ_SHORT_DESCRIPTION',$this->PRJ_SHORT_DESCRIPTION,true);
		$criteria->compare('PRJ_AMOUNT_DONATION',$this->PRJ_AMOUNT_DONATION);
		$criteria->compare('PRJ_AMOUNT_PUBLIC',$this->PRJ_AMOUNT_PUBLIC);
		$criteria->compare('PRJ_SOURCES',$this->PRJ_SOURCES,true);
		$criteria->compare('PRJ_CAT',$this->PRJ_CAT);
		$criteria->compare('PRJ_APP_ID',Yii::app()->request->subdomainAppId);
		$criteria->compare('PRJ_CREATE_DATE',$this->PRJ_CREATE_DATE,true);
		$criteria->compare('PRJ_CREATE_BY',$this->PRJ_CREATE_BY);
		$criteria->compare('PRJ_MODIFY_DATE',$this->PRJ_MODIFY_DATE,true);
		$criteria->compare('PRJ_MODIFY_BY',$this->PRJ_MODIFY_BY);
		$criteria->compare('PRJ_INFO_CREATED_BY',$this->PRJ_INFO_CREATED_BY,true);
		$criteria->compare('PRJ_INFO_CREATE_DATE',$this->PRJ_INFO_CREATE_DATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}