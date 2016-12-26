<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $id
 * @property string $name
 */
class Bitacorasesion extends CActiveRecord
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
			array('fecha, PlanificacionClase_CodPlanificacion, actividades, aprendizaje, sentir, otro', 'required'),
			array('fecha', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, PlanificacionClase_CodPlanificacion, actividades, aprendizaje, sentir, otro', 'safe', 'on'=>'search'),
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
			'clasebitacorasesion' => array(self::HAS_MANY, 'Clasebitacorasesion', 'bitacorasesion_id'),
			'planificacionClaseCodPlanificacion' => array(self::BELONGS_TO, 'Planificacionclase', 'PlanificacionClase_CodPlanificacion'),
			'documentobitacora' => array(self::HAS_MANY, 'Documentobitacora', 'bitacorasesion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'PlanificacionClase_CodPlanificacion' => 'Cod Planificacion',
			'actividades' => 'Actividades',
			'aprendizaje' => 'Aprendizaje',
			'sentir' => 'Sentir',
			'otro' => 'Otro Comentario',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('PlanificacionClase_CodPLanificacion',$this->Planificacionclase_CodPLanificacion,true);
		$criteria->compare('actividades',$this->actividades,true);
		$criteria->compare('aprendizaje',$this->aprendizaje,true);
		$criteria->compare('sentir',$this->sentir,true);
		$criteria->compare('otro',$this->otro,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
