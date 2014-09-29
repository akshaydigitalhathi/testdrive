<?php

/**
 * This is the model class for table "tbl_players".
 *
 * The followings are the available columns in table 'tbl_players':
 * @property string $PLAYER_ID
 * @property string $PLAYER_FIRSTNAME
 * @property string $PLAYER_LASTNAME
 * @property string $PLAYER_DOB
 * @property string $PLAYER_GENDER
 * @property string $PLAYER_STATE
 * @property string $PLAYER_COUNTRY
 * @property string $PLAYER_IMAGE
 * @property string $PLAYER_STATUS
 * @property double $UPDATEDON
 */
class Players extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_players';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PLAYER_FIRSTNAME, PLAYER_LASTNAME, PLAYER_DOB, PLAYER_STATE, PLAYER_COUNTRY, PLAYER_IMAGE, UPDATEDON', 'required'),
			array('UPDATEDON', 'numerical'),
			array('PLAYER_FIRSTNAME, PLAYER_LASTNAME', 'length', 'max'=>25),
			array('PLAYER_GENDER, PLAYER_STATUS', 'length', 'max'=>1),
			array('PLAYER_STATE, PLAYER_COUNTRY, PLAYER_IMAGE', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PLAYER_ID, PLAYER_FIRSTNAME, PLAYER_LASTNAME, PLAYER_DOB, PLAYER_GENDER, PLAYER_STATE, PLAYER_COUNTRY, PLAYER_IMAGE, PLAYER_STATUS, UPDATEDON', 'safe', 'on'=>'search'),
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
			'PLAYER_ID' => 'Player',
			'PLAYER_FIRSTNAME' => 'Player Firstname',
			'PLAYER_LASTNAME' => 'Player Lastname',
			'PLAYER_DOB' => 'Player Dob',
			'PLAYER_GENDER' => 'Player Gender',
			'PLAYER_STATE' => 'Player State',
			'PLAYER_COUNTRY' => 'Player Country',
			'PLAYER_IMAGE' => 'Player Image',
			'PLAYER_STATUS' => 'Player Status',
			'UPDATEDON' => 'Updatedon',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PLAYER_ID',$this->PLAYER_ID,true);
		$criteria->compare('PLAYER_FIRSTNAME',$this->PLAYER_FIRSTNAME,true);
		$criteria->compare('PLAYER_LASTNAME',$this->PLAYER_LASTNAME,true);
		$criteria->compare('PLAYER_DOB',$this->PLAYER_DOB,true);
		$criteria->compare('PLAYER_GENDER',$this->PLAYER_GENDER,true);
		$criteria->compare('PLAYER_STATE',$this->PLAYER_STATE,true);
		$criteria->compare('PLAYER_COUNTRY',$this->PLAYER_COUNTRY,true);
		$criteria->compare('PLAYER_IMAGE',$this->PLAYER_IMAGE,true);
		$criteria->compare('PLAYER_STATUS',$this->PLAYER_STATUS,true);
		$criteria->compare('UPDATEDON',$this->UPDATEDON);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Players the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
