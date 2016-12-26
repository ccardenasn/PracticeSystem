<?php

/**
 * This is the model class for table "universidad".
 *
 * The followings are the available columns in table 'universidad':
 * @property string $NombreInstitucion
 * @property string $Sede
 * @property string $Campus
 * @property string $Facultad
 * @property integer $Region_codRegion
 * @property integer $Provincia_codProvincia
 * @property integer $Ciudad_codCiudad
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadCodCiudad
 * @property Provincia $provinciaCodProvincia
 * @property Region $regionCodRegion
 */
class Universidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'universidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NombreInstitucion, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'required'),
			array('Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'numerical', 'integerOnly'=>true),
			array('NombreInstitucion, Sede, Campus, Facultad', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NombreInstitucion, Sede, Campus, Facultad, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'safe', 'on'=>'search'),
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
			'NombreInstitucion' => 'Nombre Institucion',
			'Sede' => 'Sede',
			'Campus' => 'Campus',
			'Facultad' => 'Facultad',
			'Region_codRegion' => 'Region Cod Region',
			'Provincia_codProvincia' => 'Provincia Cod Provincia',
			'Ciudad_codCiudad' => 'Ciudad Cod Ciudad',
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

		$criteria->compare('NombreInstitucion',$this->NombreInstitucion,true);
		$criteria->compare('Sede',$this->Sede,true);
		$criteria->compare('Campus',$this->Campus,true);
		$criteria->compare('Facultad',$this->Facultad,true);
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
	 * @return Universidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
