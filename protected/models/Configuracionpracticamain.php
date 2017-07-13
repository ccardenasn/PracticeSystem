<?php

/**
 * This is the model class for table "configuracionpractica".
 *
 * The followings are the available columns in table 'configuracionpractica':
 * @property integer $CodPractica
 * @property string $NombrePractica
 * @property string $DescripcionPractica
 * @property string $FechaPractica
 * @property integer $Semestre_CodSemestre
 * @property string $NumeroSesionesPractica
 * @property string $NumeroHorasPractica
 * @property string $DocenteCoordinadorPracticas_RutCoordinador
 *
 * The followings are the available model relations:
 * @property Docentecoordinadorpracticas $docenteCoordinadorPracticasRutCoordinador
 * @property Semestre $semestreCodSemestre
 * @property Docenteresponsablepractica[] $docenteresponsablepracticas
 * @property Estudiante[] $estudiantes
 * @property Planificacionclase[] $planificacionclases
 */
class Configuracionpracticamain extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'configuracionpractica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Semestre_CodSemestre, DocenteCoordinadorPracticas_RutCoordinador', 'required'),
			array('Semestre_CodSemestre', 'numerical', 'integerOnly'=>true),
			array('NombrePractica, FechaPractica, NumeroSesionesPractica, NumeroHorasPractica, DocenteCoordinadorPracticas_RutCoordinador', 'length', 'max'=>45),
			array('DescripcionPractica', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodPractica, NombrePractica, DescripcionPractica, FechaPractica, Semestre_CodSemestre, NumeroSesionesPractica, NumeroHorasPractica, DocenteCoordinadorPracticas_RutCoordinador', 'safe', 'on'=>'search'),
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
			'docenteCoordinadorPracticasRutCoordinador' => array(self::BELONGS_TO, 'Docentecoordinadorpracticas', 'DocenteCoordinadorPracticas_RutCoordinador'),
			'semestreCodSemestre' => array(self::BELONGS_TO, 'Semestre', 'Semestre_CodSemestre'),
			'docenteresponsablepracticas' => array(self::MANY_MANY, 'Docenteresponsablepractica', 'docenteresponsablepractica_has_configuracionpractica(ConfiguracionPractica_CodPractica, DocenteResponsablePractica_RutResponsable)'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'ConfiguracionPractica_CodPractica'),
			'planificacionclases' => array(self::HAS_MANY, 'Planificacionclase', 'ConfiguracionPractica_CodPractica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodPractica' => 'Cod Practica',
			'NombrePractica' => 'Nombre Practica',
			'DescripcionPractica' => 'Descripcion Practica',
			'FechaPractica' => 'Fecha Practica',
			'Semestre_CodSemestre' => 'Semestre Cod Semestre',
			'NumeroSesionesPractica' => 'Numero Sesiones Practica',
			'NumeroHorasPractica' => 'Numero Horas Practica',
			'DocenteCoordinadorPracticas_RutCoordinador' => 'Docente Coordinador Practicas Rut Coordinador',
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

		$criteria->compare('CodPractica',$this->CodPractica);
		$criteria->compare('NombrePractica',$this->NombrePractica,true);
		$criteria->compare('DescripcionPractica',$this->DescripcionPractica,true);
		$criteria->compare('FechaPractica',$this->FechaPractica,true);
		$criteria->compare('Semestre_CodSemestre',$this->Semestre_CodSemestre);
		$criteria->compare('NumeroSesionesPractica',$this->NumeroSesionesPractica,true);
		$criteria->compare('NumeroHorasPractica',$this->NumeroHorasPractica,true);
		$criteria->compare('DocenteCoordinadorPracticas_RutCoordinador',$this->DocenteCoordinadorPracticas_RutCoordinador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Configuracionpracticamain the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
