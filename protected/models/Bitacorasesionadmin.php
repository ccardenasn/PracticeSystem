<?php

/**
 * This is the model class for table "bitacorasesion".
 *
 * The followings are the available columns in table 'bitacorasesion':
 * @property integer $CodBitacora
 * @property string $FechaBitacora
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
class Bitacorasesionadmin extends CActiveRecord
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
			array('FechaBitacora, DocumentoBitacora', 'length', 'max'=>45),
			array('ActividadesBitacora, AprendizajeBitacora, SentirBitacora, OtroBitacora', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodBitacora, FechaBitacora, ActividadesBitacora, AprendizajeBitacora, SentirBitacora, OtroBitacora, DocumentoBitacora, PlanificacionClase_CodPlanificacion', 'safe', 'on'=>'search'),
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
			'FechaBitacora' => 'Fecha',
			'ActividadesBitacora' => '¿Que Realicé?',
			'AprendizajeBitacora' => '¿Que Aprendí?',
			'SentirBitacora' => '¿Que Sentí?',
			'OtroBitacora' => 'Otros Comentarios',
			'DocumentoBitacora' => 'Documento',
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
		$criteria->compare('FechaBitacora',$this->FechaBitacora,true);
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
	
	public function searchByRut($rut)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CodBitacora',$this->CodBitacora);
		$criteria->compare('FechaBitacora',$this->FechaBitacora,true);
		$criteria->compare('ActividadesBitacora',$this->ActividadesBitacora,true);
		$criteria->compare('AprendizajeBitacora',$this->AprendizajeBitacora,true);
		$criteria->compare('SentirBitacora',$this->SentirBitacora,true);
		$criteria->compare('OtroBitacora',$this->OtroBitacora,true);
		$criteria->compare('DocumentoBitacora',$this->DocumentoBitacora,true);
		$criteria->compare('PlanificacionClase_CodPlanificacion',$this->PlanificacionClase_CodPlanificacion);
		//$criteria->compare('planificacionClaseCodPlanificacion.CodPlanificacion',$this->PlanificacionClase_CodPlanificacion);
		
		$criteria->with=array('planificacionClaseCodPlanificacion');
		$criteria->addSearchCondition('planificacionClaseCodPlanificacion.Estudiante_RutEstudiante',$rut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'SesionInformada ASC',
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacorasesion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getAdmins(){
		
		$queryCoordinador = "select RutCoordinador from docentecoordinadorpracticas";
		$queryDirector = "select RutDirector from directorcarrera";
		$queryResponsable = "select RutResponsable from docenteresponsablepractica";
		
		$commandCoordinador= Yii::app()->db->createCommand($queryCoordinador);
		$commandDirector= Yii::app()->db->createCommand($queryDirector);
		$commandResponsable= Yii::app()->db->createCommand($queryResponsable);
		
		$rows = array();
		$dataReaderCoordinador=$commandCoordinador->query();
		
		while(($row=$dataReaderCoordinador->read())!==false){
			array_push($rows, $row['RutCoordinador']);
		}
		
		$dataReaderDirector=$commandDirector->query();
		
		while(($row=$dataReaderDirector->read())!==false){
			array_push($rows, $row['RutDirector']);
		}
		
		$dataReaderResponsable=$commandResponsable->query();
		
		while(($row=$dataReaderResponsable->read())!==false){
			array_push($rows, $row['RutResponsable']);
		}
        
        if($rows == null){
            $rows[0] = "@";
        }
		
		return $rows;
	}
}
