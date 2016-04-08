<?php

/**
 * This is the model class for table "contactos".
 *
 * The followings are the available columns in table 'contactos':
 * @property integer $id_contacto
 * @property string $nom_contacto
 * @property string $ape_contacto
 * @property string $init
 * @property string $tel_contacto
 * @property string $correo_contacto
 *
 * The followings are the available model relations:
 * @property Usuarios $init0
 */
class Contactos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contactos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_contacto, ape_contacto, init, tel_contacto, correo_contacto', 'required'),
			array('nom_contacto, ape_contacto', 'length', 'max'=>30),
			array('init, tel_contacto, correo_contacto', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contacto, nom_contacto, ape_contacto, init, tel_contacto, correo_contacto', 'safe', 'on'=>'search'),
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
			'init0' => array(self::BELONGS_TO, 'Usuarios', 'init'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contacto' => 'Id Contacto',
			'nom_contacto' => 'Nom Contacto',
			'ape_contacto' => 'Ape Contacto',
			'init' => 'Init',
			'tel_contacto' => 'Tel Contacto',
			'correo_contacto' => 'Correo Contacto',
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

		$criteria->compare('id_contacto',$this->id_contacto);
		$criteria->compare('nom_contacto',$this->nom_contacto,true);
		$criteria->compare('ape_contacto',$this->ape_contacto,true);
		$criteria->compare('init',$this->init,true);
		$criteria->compare('tel_contacto',$this->tel_contacto,true);
		$criteria->compare('correo_contacto',$this->correo_contacto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contactos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
