<?php

/**
 * This is the model class for table "directorcarrera".
 *
 * The followings are the available columns in table 'directorcarrera':
 * @property string $RutDirector
 * @property string $NombreDirector
 * @property string $ClaveDirector
 * @property string $MailDirector
 * @property string $TelefonoDirector
 * @property string $CelularDirector
 * @property string $ImagenDirector
 */
class Perfildirectorcarrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'directorcarrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutDirector', 'required'),
			array('RutDirector, NombreDirector, ClaveDirector, MailDirector, TelefonoDirector, CelularDirector, ImagenDirector', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutDirector, NombreDirector, ClaveDirector, MailDirector, TelefonoDirector, CelularDirector, ImagenDirector', 'safe', 'on'=>'search'),
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
			'RutDirector' => 'Rut',
			'NombreDirector' => 'Nombre',
			'ClaveDirector' => 'Clave',
			'MailDirector' => 'Correo',
			'TelefonoDirector' => 'Teléfono',
			'CelularDirector' => 'Celular',
			'ImagenDirector' => 'Imagen',
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

		$criteria->compare('RutDirector',$this->RutDirector,true);
		$criteria->compare('NombreDirector',$this->NombreDirector,true);
		$criteria->compare('ClaveDirector',$this->ClaveDirector,true);
		$criteria->compare('MailDirector',$this->MailDirector,true);
		$criteria->compare('TelefonoDirector',$this->TelefonoDirector,true);
		$criteria->compare('CelularDirector',$this->CelularDirector,true);
		$criteria->compare('ImagenDirector',$this->ImagenDirector,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perfildirectorcarrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
