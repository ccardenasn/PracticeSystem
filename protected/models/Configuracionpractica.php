<?php
include_once 'FunNumeros.php';
/**
 * This is the model class for table "configuracionpractica".
 *
 * The followings are the available columns in table 'configuracionpractica':
 * @property string $NombrePractica
 * @property string $DescripcionPractica
 * @property string $FechaPractica
 * @property integer $Semestre_CodSemestre
 * @property string $NumeroSesionesPractica
 * @property string $NumeroHorasPractica
 * @property string $DocenteCoordinadorPracticas_RutCoordinador
 * @property string $DocenteResponsablePractica_RutResponsable
 *
 * The followings are the available model relations:
 * @property Docentecoordinadorpracticas $docenteCoordinadorPracticasRutCoordinador
 * @property Docenteresponsablepractica $docenteResponsablePracticaRutResponsable
 * @property Semestre $semestreCodSemestre
 * @property Estudiante[] $estudiantes
 * @property Planificacionclase[] $planificacionclases
 */
class Configuracionpractica extends CActiveRecord
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
			array('NombrePractica, DescripcionPractica, FechaPractica, Semestre_CodSemestre, NumeroSesionesPractica, NumeroHorasPractica, DocenteCoordinadorPracticas_RutCoordinador, DocenteResponsablePractica_RutResponsable', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('NombrePractica','unique','message'=>'{value} ya existe.'),
			array('Semestre_CodSemestre', 'numerical', 'integerOnly'=>true),
			array('NombrePractica, FechaPractica, NumeroSesionesPractica, NumeroHorasPractica, DocenteCoordinadorPracticas_RutCoordinador, DocenteResponsablePractica_RutResponsable', 'length', 'max'=>45),
			array('DescripcionPractica', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodPractica, NombrePractica, DescripcionPractica, FechaPractica, Semestre_CodSemestre, NumeroSesionesPractica, NumeroHorasPractica, DocenteCoordinadorPracticas_RutCoordinador, DocenteResponsablePractica_RutResponsable', 'safe', 'on'=>'search'),
            array('FechaPractica','valfecha'),
            array('NumeroSesionesPractica','valsesiones'),
            array('NumeroHorasPractica','valhoras'),
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
			'docenteResponsablePracticaRutResponsable' => array(self::BELONGS_TO, 'Docenteresponsablepractica', 'DocenteResponsablePractica_RutResponsable'),
			'semestreCodSemestre' => array(self::BELONGS_TO, 'Semestre', 'Semestre_CodSemestre'),
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
            'CodPractica' => 'Nombre de Práctica',
			'NombrePractica' => 'Nombre de Práctica',
			'DescripcionPractica' => 'Descripción',
			'FechaPractica' => 'Año',
			'Semestre_CodSemestre' => 'Semestre',
			'NumeroSesionesPractica' => 'Número de Sesiones',
			'NumeroHorasPractica' => 'Número de Horas',
			'DocenteCoordinadorPracticas_RutCoordinador' => 'Rut Docente Coordinador Prácticas',
			'docenteCoordinadorPracticasRutCoordinador.NombreCoordinador' => 'Nombre Docente Coordinador Prácticas',
			'DocenteResponsablePractica_RutResponsable' => 'Rut Docente Responsable Práctica',
			'docenteResponsablePracticaRutResponsable.NombreResponsable' => 'Nombre Docente Responsable Práctica',
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
	/*public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('NombrePractica',$this->NombrePractica,true);
		$criteria->compare('DescripcionPractica',$this->DescripcionPractica,true);
		$criteria->compare('FechaPractica',$this->FechaPractica,true);
		$criteria->compare('Semestre_CodSemestre',$this->Semestre_CodSemestre);
		$criteria->compare('NumeroSesionesPractica',$this->NumeroSesionesPractica,true);
		$criteria->compare('NumeroHorasPractica',$this->NumeroHorasPractica,true);
		$criteria->compare('DocenteCoordinadorPracticas_RutCoordinador',$this->DocenteCoordinadorPracticas_RutCoordinador,true);
		$criteria->compare('DocenteResponsablePractica_RutResponsable',$this->DocenteResponsablePractica_RutResponsable,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

        $criteria->compare('CodPractica',$this->CodPractica);
		$criteria->compare('NombrePractica',$this->NombrePractica);
		$criteria->compare('DescripcionPractica',$this->DescripcionPractica,true);
		$criteria->compare('FechaPractica',$this->FechaPractica,true);
		$criteria->compare('Semestre_CodSemestre',$this->Semestre_CodSemestre);
		$criteria->compare('NumeroSesionesPractica',$this->NumeroSesionesPractica,true);
		$criteria->compare('NumeroHorasPractica',$this->NumeroHorasPractica,true);
		$criteria->compare('DocenteCoordinadorPracticas_RutCoordinador',$this->DocenteCoordinadorPracticas_RutCoordinador,true);
		$criteria->compare('DocenteResponsablePractica_RutResponsable',$this->DocenteResponsablePractica_RutResponsable);

		$sort= new CSort();
		
		$_SESSION['datos_filtrados']=new CActiveDataProvider($this,array(
		'criteria'=>$criteria,
		'sort'=>$sort,
		'pagination'=>false
		));
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Configuracionpractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valfecha($attribute,$params)
	{
		if(numerovalido($this->FechaPractica)==false)
		$this->addError('FechaPractica','solo se permiten números');
	}
    
    public function valsesiones($attribute,$params)
	{
		if(numerovalido($this->NumeroSesionesPractica)==false)
		$this->addError('NumeroSesionesPractica','solo se permiten números');
	}
    
    public function valhoras($attribute,$params)
	{
		if(numerovalido($this->NumeroHorasPractica)==false)
		$this->addError('NumeroHorasPractica','solo se permiten números');
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
