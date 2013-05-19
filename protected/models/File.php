<?php

/**
 * This is the model class for table "fil".
 *
 * The followings are the available columns in table 'fil':
 * @property integer $FIL_ID
 * @property string $FIL_NAME
 * @property integer $FIL_CAT
 * @property string $FIL_CONTENT
 * @property string $FIL_CREATE_DATE
 * @property integer $FIL_CREATE_BY
 * @property string $FIL_MODIFY_DATE
 * @property integer $FIL_MODIFY_BY
 * @property string $FIL_INFO_CREATED_BY
 * @property string $FIL_INFO_CREATEDATE
 *
 * The followings are the available model relations:
 * @property FilHist[] $filHists
 */
class File extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return File the static model class
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
		return 'fil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIL_APP_ID, FIL_CREATE_DATE, FIL_CREATE_BY', 'required'),
			array('FIL_CAT, FIL_APP_ID, FIL_CREATE_BY, FIL_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('FIL_NAME, FIL_INFO_CREATED_BY', 'length', 'max'=>256),
			array('FIL_CONTENT, FIL_MODIFY_DATE, FIL_INFO_CREATE_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FIL_ID, FIL_NAME, FIL_CAT, FIL_CONTENT, FIL_APP_ID, FIL_CREATE_DATE, FIL_CREATE_BY, FIL_MODIFY_DATE, FIL_MODIFY_BY, FIL_INFO_CREATED_BY, FIL_INFO_CREATE_DATE', 'safe', 'on'=>'search'),
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
			'History' => array(self::HAS_MANY, 'FileHistory', 'FIL_HIST_FIL_ID'),
			'ModifyBy' => array(self::BELONGS_TO, 'User', 'FIL_MODIFY_BY'),
			'CreateBy' => array(self::BELONGS_TO, 'User', 'FIL_CREATE_BY'),
		);
	}
	
	public function GetCategoryDescription()
	{
		return FileCategory::GetDescription($this->FIL_CAT);
	}
	
	public function GetPodmiot()
	{
		return strip_tags(Information::FindByName('Pełna nazwa organizacji'));
	}
	
	private $_old;
	
	public function beforeSave()
	{
		$this->_old = File::model()->findByPk($this->FIL_ID);
	
		if($file=CUploadedFile::getInstance($this,'uploadedFile'))
		{
			$this->FIL_NAME = $file->name;
			$this->FIL_CONTENT = file_get_contents($file->tempName);
		}

		return parent::beforeSave();
	}
	
	public function afterSave()
	{
		if ($this->_old->FIL_NAME != $this->FIL_NAME ||
			$this->_old->FIL_CONTENT != $this->FIL_CONTENT)
		{
			$historyEntry = new FileHistory;
			
			$historyEntry->FIL_HIST_FIL_ID = $this->_old->FIL_ID;
			$historyEntry->FIL_NAME = $this->_old->FIL_NAME;
			$historyEntry->FIL_CONTENT = $this->_old->FIL_CONTENT;
			$historyEntry->FIL_MODIFY_DATE = $this->FIL_MODIFY_DATE;
			$historyEntry->FIL_MODIFY_BY = $this->FIL_MODIFY_BY;
			
			$historyEntry->save();
		}

		parent::afterSave();
	}
	
	public function GetHistoryProvider()
	{
		$params[':FIL_HIST_FIL_ID'] = $this->FIL_ID;
		$condition = "FIL_HIST_FIL_ID = :FIL_HIST_FIL_ID";
		
		$criteria = new CDbCriteria(array(
			'condition'=>$condition,
			'params'=>$params
		));
	
		$dataProvider = new CActiveDataProvider('FileHistory', array(
			'criteria'=>$criteria,
		));
			
		return $dataProvider;
	}
	
	public function UserFind($phrase)
	{
		$condition = "LOWER(FIL_NAME) like :PHRASE";
		$params[':PHRASE'] = '%'.$phrase.'%';

		$criteria = new CDbCriteria(array(
				'condition'=>$condition,
				'params'=>$params
			));

		$dataProvider = new CActiveDataProvider('File', array(
				'criteria'=>$criteria,
				'pagination'=>false,
				// 'pagination'=>array(
					// 'pageSize'=>20,
				// ),
			));
			
		return $dataProvider;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FIL_ID' => '#',
			'FIL_NAME' => 'Plik',
			'FIL_CAT' => 'Kategoria',
			'FIL_CONTENT' => 'Fil Content',
			'FIL_APP_ID' => 'App',
			'FIL_CREATE_DATE' => 'Data udostępnienia informacji w BIP',
			'FIL_CREATE_BY' => 'Informację wprowadził do BIP',
			'FIL_MODIFY_DATE' => 'Fil Modify Date',
			'FIL_MODIFY_BY' => 'Fil Modify By',
			'uploadedFile' => 'Plik',
			'FIL_INFO_CREATED_BY' => 'Informację wytworzył lub odpowiada za treść',
			'FIL_INFO_CREATE_DATE' => 'Data wytworzenia informacji',
			'Podmiot'=>'Podmiot udostępniający informację'
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

		$criteria->compare('FIL_ID',$this->FIL_ID);
		$criteria->compare('FIL_NAME',$this->FIL_NAME,true);
		$criteria->compare('FIL_CAT',$this->FIL_CAT);
		$criteria->compare('FIL_CONTENT',$this->FIL_CONTENT,true);
		$criteria->compare('FIL_APP_ID',Yii::app()->request->subdomainAppId);
		$criteria->compare('FIL_CREATE_DATE',$this->FIL_CREATE_DATE,true);
		$criteria->compare('FIL_CREATE_BY',$this->FIL_CREATE_BY);
		$criteria->compare('FIL_MODIFY_DATE',$this->FIL_MODIFY_DATE,true);
		$criteria->compare('FIL_MODIFY_BY',$this->FIL_MODIFY_BY);
		$criteria->compare('FIL_INFO_CREATED_BY',$this->FIL_INFO_CREATED_BY,true);
		$criteria->compare('FIL_INFO_CREATE_DATE',$this->FIL_INFO_CREATE_DATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}