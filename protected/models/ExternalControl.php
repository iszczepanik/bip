<?php

/**
 * This is the model class for table "ctrl".
 *
 * The followings are the available columns in table 'ctrl':
 * @property integer $CTRL_ID
 * @property integer $CTRL_YEAR
 * @property string $CTRL_NAME
 * @property string $CTRL_INSTITUTION
 * @property string $CTRL_DATE_START
 * @property string $CTRL_DATE_END
 * @property string $CTRL_SCOPE
 * @property integer $CTRL_FILE_ID
 * @property string $CTRL_CREATE_DATE
 * @property integer $CTRL_CREATE_BY
 * @property string $CTRL_MODIFY_DATE
 * @property integer $CTRL_MODIFY_BY
 * @property string $CTRL_INFO_CREATED_BY
 * @property string $CTRL_INFO_CREATE_DATE
 *
 * The followings are the available model relations:
 * @property Fil $cTRLFILE
 * @property Usr $cTRLCREATEBY
 * @property Usr $cTRLMODIFYBY
 * @property CtrlHist[] $ctrlHists
 */
class ExternalControl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExternalControl the static model class
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
		return 'ctrl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CTRL_YEAR, CTRL_NAME, CTRL_INSTITUTION, CTRL_DATE_START, CTRL_DATE_END, CTRL_SCOPE, CTRL_CREATE_DATE, CTRL_CREATE_BY', 'required'),
			array('CTRL_YEAR, CTRL_FILE_ID, CTRL_CREATE_BY, CTRL_MODIFY_BY', 'numerical', 'integerOnly'=>true),
			array('CTRL_NAME, CTRL_INSTITUTION', 'length', 'max'=>128),
			array('CTRL_INFO_CREATED_BY', 'length', 'max'=>256),
			array('CTRL_MODIFY_DATE, CTRL_INFO_CREATE_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CTRL_ID, CTRL_YEAR, CTRL_NAME, CTRL_INSTITUTION, CTRL_DATE_START, CTRL_DATE_END, CTRL_SCOPE, CTRL_FILE_ID, CTRL_CREATE_DATE, CTRL_CREATE_BY, CTRL_MODIFY_DATE, CTRL_MODIFY_BY, CTRL_INFO_CREATED_BY, CTRL_INFO_CREATE_DATE', 'safe', 'on'=>'search'),
		);
	}
	
	public function GetPodmiot()
	{
		return strip_tags(Information::FindByName('Pełna nazwa organizacji'));
	}
	
	public function GetHistoryProvider()
	{
		$params[':CTRL_HIST_CTRL_ID'] = $this->CTRL_ID;
		$condition = "CTRL_HIST_CTRL_ID = :CTRL_HIST_CTRL_ID";
		
		$criteria = new CDbCriteria(array(
			'condition'=>$condition,
			'params'=>$params
		));
	
		$dataProvider = new CActiveDataProvider('ExternalControlHistory', array(
			'criteria'=>$criteria,
		));
			
		return $dataProvider;
	}

	public function UserFind($phrase)
	{
		$condition = "LOWER(CTRL_NAME) like :PHRASE or LOWER(CTRL_INSTITUTION) like :PHRASE or LOWER(fnStripTags(CTRL_SCOPE)) LIKE :PHRASE";
		$params[':PHRASE'] = '%'.$phrase.'%';

		$criteria = new CDbCriteria(array(
				'condition'=>$condition,
				'params'=>$params
			));

		$dataProvider = new CActiveDataProvider('ExternalControl', array(
				'criteria'=>$criteria,
				'pagination'=>false,
				// 'pagination'=>array(
					// 'pageSize'=>20,
				// ),
			));
			
		return $dataProvider;
	}
	
	public function GetLink()
	{
		$inf = Information::FindByExternalControl();
		return $inf->Link."#ctrl_".$this->CTRL_ID;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'File' => array(self::BELONGS_TO, 'File', 'CTRL_FILE_ID'),
			'CreateBy' => array(self::BELONGS_TO, 'User', 'CTRL_CREATE_BY'),
			'cTRLMODIFYBY' => array(self::BELONGS_TO, 'Usr', 'CTRL_MODIFY_BY'),
			'History' => array(self::HAS_MANY, 'ExternalControlHistory', 'CTRL_HIST_CTRL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CTRL_ID' => '#',
			'CTRL_YEAR' => 'Rok',
			'CTRL_NAME' => 'Tytuł',
			'CTRL_INSTITUTION' => 'Nazwa instytucji przeprowadzającej kontrolę',
			'CTRL_DATE_START' => 'Od',
			'CTRL_DATE_END' => 'Do',
			'CTRL_SCOPE' => 'Zakres kontroli',
			'CTRL_FILE_ID' => 'Wyniki',
			'CTRL_CREATE_DATE' => 'Data udostępnienia informacji w BIP',
			'CTRL_CREATE_BY' => 'Informację wprowadził do BIP',
			'CTRL_MODIFY_DATE' => 'Ctrl Modify Date',
			'CTRL_MODIFY_BY' => 'Ctrl Modify By',
			'CTRL_INFO_CREATED_BY' => 'Informację wytworzył lub odpowiada za treść',
			'CTRL_INFO_CREATE_DATE' => 'Data wytworzenia informacji',
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

		$criteria->compare('CTRL_ID',$this->CTRL_ID);
		$criteria->compare('CTRL_YEAR',$this->CTRL_YEAR);
		$criteria->compare('CTRL_NAME',$this->CTRL_NAME,true);
		$criteria->compare('CTRL_INSTITUTION',$this->CTRL_INSTITUTION,true);
		$criteria->compare('CTRL_DATE_START',$this->CTRL_DATE_START,true);
		$criteria->compare('CTRL_DATE_END',$this->CTRL_DATE_END,true);
		$criteria->compare('CTRL_SCOPE',$this->CTRL_SCOPE,true);
		$criteria->compare('CTRL_FILE_ID',$this->CTRL_FILE_ID);
		$criteria->compare('CTRL_CREATE_DATE',$this->CTRL_CREATE_DATE,true);
		$criteria->compare('CTRL_CREATE_BY',$this->CTRL_CREATE_BY);
		$criteria->compare('CTRL_MODIFY_DATE',$this->CTRL_MODIFY_DATE,true);
		$criteria->compare('CTRL_MODIFY_BY',$this->CTRL_MODIFY_BY);
		$criteria->compare('CTRL_INFO_CREATED_BY',$this->CTRL_INFO_CREATED_BY,true);
		$criteria->compare('CTRL_INFO_CREATE_DATE',$this->CTRL_INFO_CREATE_DATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}