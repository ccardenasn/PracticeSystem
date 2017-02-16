<?php

/**
 * This is the model class for table "carrera".
 *
 * The followings are the available columns in table 'carrera':
 * @property string $codCarrera
 * @property string $NombreCarrera
 * @property string $Sede
 * @property integer $Region_codRegion
 * @property integer $Provincia_codProvincia
 * @property integer $Ciudad_codCiudad
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadCodCiudad
 * @property Provincia $provinciaCodProvincia
 * @property Region $regionCodRegion
 */
class Carrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codCarrera, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'required'),
			array('Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'numerical', 'integerOnly'=>true),
			array('codCarrera, NombreCarrera, Sede', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codCarrera, NombreCarrera, Sede, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'safe', 'on'=>'search'),
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
			'ciudadCodCiudad' => array(self::BELONGS_TO, 'Ciudad', 'Ciudad_codCiudad'),
			'provinciaCodProvincia' => array(self::BELONGS_TO, 'Provincia', 'Provincia_codProvincia'),
			'regionCodRegion' => array(self::BELONGS_TO, 'Region', 'Region_codRegion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codCarrera' => 'Cod Carrera',
			'NombreCarrera' => 'Nombre Carrera',
			'Sede' => 'Sede',
			'Region_codRegion' => 'Región',
			'Provincia_codProvincia' => 'Provincia',
			'Ciudad_codCiudad' => 'Ciudad',
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

		$criteria->compare('codCarrera',$this->codCarrera,true);
		$criteria->compare('NombreCarrera',$this->NombreCarrera,true);
		$criteria->compare('Sede',$this->Sede,true);
		$criteria->compare('Region_codRegion',$this->Region_codRegion);
		$criteria->compare('Provincia_codProvincia',$this->Provincia_codProvincia);
		$criteria->compare('Ciudad_codCiudad',$this->Ciudad_codCiudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
