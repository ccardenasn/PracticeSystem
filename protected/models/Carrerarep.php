<?php

/**
 * This is the model class for table "carrera".
 *
 * The followings are the available columns in table 'carrera':
 * @property string $codCarrera
 * @property string $NombreCarrera
 * @property string $SemestresCarrera
 * @property integer $Universidad_CodInstitucion
 *
 * The followings are the available model relations:
 * @property Universidad $universidadCodInstitucion
 * @property Secretariacarrera[] $secretariacarreras
 */
class Carrerarep extends CActiveRecord
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
			array('codCarrera, Universidad_CodInstitucion', 'required'),
			array('Universidad_CodInstitucion', 'numerical', 'integerOnly'=>true),
			array('codCarrera, NombreCarrera, SemestresCarrera', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codCarrera, NombreCarrera, SemestresCarrera, Universidad_CodInstitucion', 'safe', 'on'=>'search'),
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
			'universidadCodInstitucion' => array(self::BELONGS_TO, 'Universidad', 'Universidad_CodInstitucion'),
			'secretariacarreras' => array(self::HAS_MANY, 'Secretariacarrera', 'Carrera_codCarrera'),
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
			'SemestresCarrera' => 'Semestres Carrera',
			'Universidad_CodInstitucion' => 'Universidad Cod Institucion',
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
		$criteria->compare('SemestresCarrera',$this->SemestresCarrera,true);
		$criteria->compare('Universidad_CodInstitucion',$this->Universidad_CodInstitucion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carrerarep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
