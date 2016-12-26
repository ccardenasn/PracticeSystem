<?php

/**
 * This is the model class for table "provincia".
 *
 * The followings are the available columns in table 'provincia':
 * @property integer $codProvincia
 * @property string $NombreProvincia
 * @property integer $Region_codRegion
 *
 * The followings are the available model relations:
 * @property Centropractica[] $centropracticas
 * @property Ciudad[] $ciudads
 * @property Region $regionCodRegion
 * @property Universidad[] $universidads
 */
class Provincia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'provincia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codProvincia, Region_codRegion', 'required'),
			array('codProvincia, Region_codRegion', 'numerical', 'integerOnly'=>true),
			array('NombreProvincia', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codProvincia, NombreProvincia, Region_codRegion', 'safe', 'on'=>'search'),
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
			'centropracticas' => array(self::HAS_MANY, 'Centropractica', 'Provincia_codProvincia'),
			'ciudads' => array(self::HAS_MANY, 'Ciudad', 'Provincia_codProvincia'),
			'regionCodRegion' => array(self::BELONGS_TO, 'Region', 'Region_codRegion'),
			'universidads' => array(self::HAS_MANY, 'Universidad', 'Provincia_codProvincia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codProvincia' => 'Cod Provincia',
			'NombreProvincia' => 'Nombre Provincia',
			'Region_codRegion' => 'Region Cod Region',
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

		$criteria->compare('codProvincia',$this->codProvincia);
		$criteria->compare('NombreProvincia',$this->NombreProvincia,true);
		$criteria->compare('Region_codRegion',$this->Region_codRegion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Provincia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
