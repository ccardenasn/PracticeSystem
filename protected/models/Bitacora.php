<?php

/**
 * This is the model class for table "bitacora".
 *
 * The followings are the available columns in table 'bitacora':
 * @property integer $CodBitacora
 * @property string $Fecha
 * @property string $ActividadesRealizadas
 * @property string $Aprendizaje
 * @property string $Sentir
 * @property string $OtroComentario
 * @property string $DocumentoWord
 * @property integer $PlanificacionClase_CodPlanificacion
 *
 * The followings are the available model relations:
 * @property Planificacionclase $planificacionClaseCodPlanificacion
 * @property Clasebitacora[] $clasebitacoras
 */
class Bitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacora';
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
			array('Fecha', 'length', 'max'=>45),
			array('DocumentoWord', 'length', 'max'=>255),
			array('ActividadesRealizadas, Aprendizaje, Sentir, OtroComentario', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodBitacora, Fecha, ActividadesRealizadas, Aprendizaje, Sentir, OtroComentario, DocumentoWord, PlanificacionClase_CodPlanificacion', 'safe', 'on'=>'search'),
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
			'clasebitacoras' => array(self::HAS_MANY, 'Clasebitacora', 'Bitacora_CodBitacora'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodBitacora' => 'Cod Bitacora',
			'Fecha' => 'Fecha',
			'ActividadesRealizadas' => 'Actividades Realizadas',
			'Aprendizaje' => 'Aprendizaje',
			'Sentir' => 'Sentir',
			'OtroComentario' => 'Otro Comentario',
			'DocumentoWord' => 'Documento Word',
			'PlanificacionClase_CodPlanificacion' => 'Planificacion Clase Cod Planificacion',
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
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('ActividadesRealizadas',$this->ActividadesRealizadas,true);
		$criteria->compare('Aprendizaje',$this->Aprendizaje,true);
		$criteria->compare('Sentir',$this->Sentir,true);
		$criteria->compare('OtroComentario',$this->OtroComentario,true);
		$criteria->compare('DocumentoWord',$this->DocumentoWord,true);
		$criteria->compare('PlanificacionClase_CodPlanificacion',$this->PlanificacionClase_CodPlanificacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
