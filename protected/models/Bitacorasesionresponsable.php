<?php

/**
 * This is the model class for table "bitacorasesion".
 *
 * The followings are the available columns in table 'bitacorasesion':
 * @property integer $CodBitacora
 * @property string $ActividadesBitacora
 * @property string $AprendizajeBitacora
 * @property string $SentirBitacora
 * @property string $OtroBitacora
 * @property string $DocumentoBitacora
 * @property integer $PlanificacionClase_CodPlanificacion
 *
 * The followings are the available model relations:
 * @property Planificacionclase $planificacionClaseCodPlanificacion
 * @property Clasebitacorasesion[] $clasebitacorasesions
 */
class Bitacorasesionresponsable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacorasesion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PlanificacionClase_CodPlanificacion', 'required'),
			array('PlanificacionClase_CodPlanificacion', 'numerical', 'integerOnly'=>true),
			array('DocumentoBitacora', 'length', 'max'=>45),
			array('ActividadesBitacora, AprendizajeBitacora, SentirBitacora, OtroBitacora', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodBitacora, ActividadesBitacora, AprendizajeBitacora, SentirBitacora, OtroBitacora, DocumentoBitacora, PlanificacionClase_CodPlanificacion', 'safe', 'on'=>'search'),
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
			'planificacionClaseCodPlanificacion' => array(self::BELONGS_TO, 'Planificacionclase', 'PlanificacionClase_CodPlanificacion'),
			'clasebitacorasesions' => array(self::HAS_MANY, 'Clasebitacorasesion', 'BitacoraSesion_CodBitacora'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodBitacora' => 'Cod Bitacora',
			'ActividadesBitacora' => '¿Que Realicé?',
			'AprendizajeBitacora' => '¿Que Aprendí?',
			'SentirBitacora' => '¿Que Sentí?',
			'OtroBitacora' => 'Otros Comentarios',
			'DocumentoBitacora' => 'Documento',
			'PlanificacionClase_CodPlanificacion' => 'Planificacion Clase Cod Planificacion',
            'planificacionClaseCodPlanificacion.centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
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

		$criteria->compare('CodBitacora',$this->CodBitacora);
		$criteria->compare('ActividadesBitacora',$this->ActividadesBitacora,true);
		$criteria->compare('AprendizajeBitacora',$this->AprendizajeBitacora,true);
		$criteria->compare('SentirBitacora',$this->SentirBitacora,true);
		$criteria->compare('OtroBitacora',$this->OtroBitacora,true);
		$criteria->compare('DocumentoBitacora',$this->DocumentoBitacora,true);
		$criteria->compare('PlanificacionClase_CodPlanificacion',$this->PlanificacionClase_CodPlanificacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacorasesionresponsable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
