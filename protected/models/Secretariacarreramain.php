<?php

/**
 * This is the model class for table "secretariacarrera".
 *
 * The followings are the available columns in table 'secretariacarrera':
 * @property string $RutSecretaria
 * @property string $NombreSecretaria
 * @property string $MailSecretaria
 * @property string $TelefonoSecretaria
 * @property string $CelularSecretaria
 * @property string $ImagenSecretaria
 * @property string $Carrera_codCarrera
 *
 * The followings are the available model relations:
 * @property Carrera $carreraCodCarrera
 */
class Secretariacarreramain extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'secretariacarrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutSecretaria, Carrera_codCarrera', 'required'),
			array('RutSecretaria, NombreSecretaria, MailSecretaria, TelefonoSecretaria, CelularSecretaria, ImagenSecretaria, Carrera_codCarrera', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutSecretaria, NombreSecretaria, MailSecretaria, TelefonoSecretaria, CelularSecretaria, ImagenSecretaria, Carrera_codCarrera', 'safe', 'on'=>'search'),
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
			'carreraCodCarrera' => array(self::BELONGS_TO, 'Carrera', 'Carrera_codCarrera'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutSecretaria' => 'Rut Secretaria',
			'NombreSecretaria' => 'Nombre Secretaria',
			'MailSecretaria' => 'Mail Secretaria',
			'TelefonoSecretaria' => 'Telefono Secretaria',
			'CelularSecretaria' => 'Celular Secretaria',
			'ImagenSecretaria' => 'Imagen Secretaria',
			'Carrera_codCarrera' => 'Carrera Cod Carrera',
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

		$criteria->compare('RutSecretaria',$this->RutSecretaria,true);
		$criteria->compare('NombreSecretaria',$this->NombreSecretaria,true);
		$criteria->compare('MailSecretaria',$this->MailSecretaria,true);
		$criteria->compare('TelefonoSecretaria',$this->TelefonoSecretaria,true);
		$criteria->compare('CelularSecretaria',$this->CelularSecretaria,true);
		$criteria->compare('ImagenSecretaria',$this->ImagenSecretaria,true);
		$criteria->compare('Carrera_codCarrera',$this->Carrera_codCarrera,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Secretariacarreramain the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
