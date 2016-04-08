<?php

/**
 * This is the model class for table "agenda".
 *
 * The followings are the available columns in table 'agenda':
 * @property string $idcontact
 * @property string $nom_contact
 * @property string $ape_contact
 * @property string $correo_contact
 * @property string $tel_contact
 * @property integer $id
 */
class Agenda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_contact, ape_contact, correo_contact, tel_contact, id', 'required'),
			array('idcontact', 'numerical', 'integerOnly'=>true),
			array('nom_contact, ape_contact, correo_contact', 'length', 'max'=>40),
			array('tel_contact', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcontact, nom_contact, ape_contact, correo_contact, tel_contact, id', 'safe', 'on'=>'search'),
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
			'idcontact' => 'Idcontact',
			'nom_contact' => 'Nom Contact',
			'ape_contact' => 'Ape Contact',
			'correo_contact' => 'Correo Contact',
			'tel_contact' => 'Tel Contact',
			'id' => 'ID',
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

		$criteria->compare('idcontact',$this->idcontact,true);
		$criteria->compare('nom_contact',$this->nom_contact,true);
		$criteria->compare('ape_contact',$this->ape_contact,true);
		$criteria->compare('correo_contact',$this->correo_contact,true);
		$criteria->compare('tel_contact',$this->tel_contact,true);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agenda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
