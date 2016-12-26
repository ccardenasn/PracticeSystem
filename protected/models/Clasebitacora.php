<?php

/**
 * This is the model class for table "clasebitacora".
 *
 * The followings are the available columns in table 'clasebitacora':
 * @property integer $CodClaseBitacora
 * @property string $Curso
 * @property string $Hora
 * @property string $Asignatura
 * @property string $ProfesorGuia
 * @property string $NumeroAlumnos
 * @property integer $Bitacora_CodBitacora
 *
 * The followings are the available model relations:
 * @property Bitacora $bitacoraCodBitacora
 */
class Clasebitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	
	public $updateType;
	
	public function tableName()
	{
		return 'clasebitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Bitacora_CodBitacora', 'required'),
			array('Bitacora_CodBitacora', 'numerical', 'integerOnly'=>true),
			array('Curso, Hora, Asignatura, ProfesorGuia, NumeroAlumnos', 'length', 'max'=>45),
			array('CodClaseBitacora, updateType', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodClaseBitacora, Curso, Hora, Asignatura, ProfesorGuia, NumeroAlumnos, Bitacora_CodBitacora', 'safe', 'on'=>'search'),
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
			'bitacoraCodBitacora' => array(self::BELONGS_TO, 'Bitacora', 'Bitacora_CodBitacora'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodClaseBitacora' => 'Cod Clase Bitacora',
			'Curso' => 'Curso',
			'Hora' => 'Hora',
			'Asignatura' => 'Asignatura',
			'ProfesorGuia' => 'Profesor Guia',
			'NumeroAlumnos' => 'Numero Alumnos',
			'Bitacora_CodBitacora' => 'Bitacora Cod Bitacora',
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

		$criteria->compare('CodClaseBitacora',$this->CodClaseBitacora);
		$criteria->compare('Curso',$this->Curso,true);
		$criteria->compare('Hora',$this->Hora,true);
		$criteria->compare('Asignatura',$this->Asignatura,true);
		$criteria->compare('ProfesorGuia',$this->ProfesorGuia,true);
		$criteria->compare('NumeroAlumnos',$this->NumeroAlumnos,true);
		$criteria->compare('Bitacora_CodBitacora',$this->Bitacora_CodBitacora);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clasebitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
