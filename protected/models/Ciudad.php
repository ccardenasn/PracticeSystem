<?php

/**
 * This is the model class for table "ciudad".
 *
 * The followings are the available columns in table 'ciudad':
 * @property integer $codCiudad
 * @property string $NombreCiudad
 * @property integer $Provincia_codProvincia
 *
 * The followings are the available model relations:
 * @property Centropractica[] $centropracticas
 * @property Provincia $provinciaCodProvincia
 * @property Universidad[] $universidads
 */
class Ciudad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ciudad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codCiudad, Provincia_codProvincia', 'required'),
			array('codCiudad, Provincia_codProvincia', 'numerical', 'integerOnly'=>true),
			array('NombreCiudad', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codCiudad, NombreCiudad, Provincia_codProvincia', 'safe', 'on'=>'search'),
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
			'centropracticas' => array(self::HAS_MANY, 'Centropractica', 'Ciudad_codCiudad'),
			'provinciaCodProvincia' => array(self::BELONGS_TO, 'Provincia', 'Provincia_codProvincia'),
			'universidads' => array(self::HAS_MANY, 'Universidad', 'Ciudad_codCiudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codCiudad' => 'Cod Ciudad',
			'NombreCiudad' => 'Nombre Ciudad',
			'Provincia_codProvincia' => 'Provincia Cod Provincia',
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

		$criteria->compare('codCiudad',$this->codCiudad);
		$criteria->compare('NombreCiudad',$this->NombreCiudad,true);
		$criteria->compare('Provincia_codProvincia',$this->Provincia_codProvincia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ciudad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
