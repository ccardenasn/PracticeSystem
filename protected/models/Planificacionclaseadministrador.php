<?php
include_once 'FunFecha.php';
/**
 * This is the model class for table "planificacionclase".
 *
 * The followings are the available columns in table 'planificacionclase':
 * @property integer $CodPlanificacion
 * @property string $Estudiante_RutEstudiante
 * @property integer $CentroPractica_RBD
 * @property string $ProfesorGuiaCP_RutProfGuiaCP
 * @property string $Curso
 * @property string $ConfiguracionPractica_NombrePractica
 * @property string $Fecha
 * @property string $SesionInformada
 * @property string $Ejecutado
 * @property string $Supervisado
 * @property string $ComentarioPlanificacion
 *
 * The followings are the available model relations:
 * @property Bitacorasesion[] $bitacorasesions
 * @property Centropractica $centroPracticaRBD
 * @property Configuracionpractica $configuracionPracticaNombrePractica
 * @property Estudiante $estudianteRutEstudiante
 * @property Profesorguiacp $profesorGuiaCPRutProfGuiaCP
 */
class Planificacionclaseadministrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'planificacionclase';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Estudiante_RutEstudiante, CentroPractica_RBD, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_CodPractica, Fecha', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('Estudiante_RutEstudiante, ProfesorGuiaCP_RutProfGuiaCP, Curso, ConfiguracionPractica_CodPractica, Fecha, SesionInformada, Ejecutado, Supervisado', 'length', 'max'=>45),
			array('ComentarioPlanificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodPlanificacion, Estudiante_RutEstudiante, CentroPractica_RBD, ProfesorGuiaCP_RutProfGuiaCP, Curso, ConfiguracionPractica_CodPractica, Fecha, SesionInformada, Ejecutado, Supervisado, ComentarioPlanificacion', 'safe', 'on'=>'search'),
            array('Fecha','valfecha'),
            //array('CentroPractica_RBD','valcentro'),
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
			'bitacorasesions' => array(self::HAS_MANY, 'Bitacorasesion', 'PlanificacionClase_CodPlanificacion'),
			'centroPracticaRBD' => array(self::BELONGS_TO, 'Centropractica', 'CentroPractica_RBD'),
			'configuracionPracticaCodPractica' => array(self::BELONGS_TO, 'Configuracionpractica', 'ConfiguracionPractica_CodPractica'),
			'estudianteRutEstudiante' => array(self::BELONGS_TO, 'Estudiante', 'Estudiante_RutEstudiante'),
			'profesorGuiaCPRutProfGuiaCP' => array(self::BELONGS_TO, 'Profesorguiacp', 'ProfesorGuiaCP_RutProfGuiaCP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodPlanificacion' => 'Cod Planificacion',
			'Estudiante_RutEstudiante' => 'Rut Estudiante',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'ProfesorGuiaCP_RutProfGuiaCP' => 'Rut Profesor Guía',
			'Curso' => 'Curso',
            'ConfiguracionPractica_CodPractica' => 'Nombre de Práctica',
			'Fecha' => 'Fecha',
			'SesionInformada' => 'Sesion Informada',
			'Ejecutado' => 'Ejecutado',
			'Supervisado' => 'Supervisado',
			'ComentarioPlanificacion' => 'Comentario',
            'configuracionPracticaCodPractica.NumeroSesionesPractica' => 'Total de Sesiones',
            'configuracionPracticaCodPractica.NumeroHorasPractica' => 'Número de Horas',
            'estudianteRutEstudiante.NombreEstudiante' => 'Nombre Estudiante',
            'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP' => 'Nombre Profesor Guía CP',
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

		$criteria->compare('CodPlanificacion',$this->CodPlanificacion);
		$criteria->compare('Estudiante_RutEstudiante',$this->Estudiante_RutEstudiante,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ProfesorGuiaCP_RutProfGuiaCP',$this->ProfesorGuiaCP_RutProfGuiaCP,true);
		$criteria->compare('Curso',$this->Curso,true);
        $criteria->compare('ConfiguracionPractica_CodPractica',$this->ConfiguracionPractica_CodPractica);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('SesionInformada',$this->SesionInformada,true);
		$criteria->compare('Ejecutado',$this->Ejecutado,true);
		$criteria->compare('Supervisado',$this->Supervisado,true);
		$criteria->compare('ComentarioPlanificacion',$this->ComentarioPlanificacion,true);

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
	
	/*public function searchByRut($rut)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CodPlanificacion',$this->CodPlanificacion);
		$criteria->compare('Estudiante_RutEstudiante',$rut);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ProfesorGuiaCP_RutProfGuiaCP',$this->ProfesorGuiaCP_RutProfGuiaCP);
		$criteria->compare('Curso',$this->Curso,true);
		$criteria->compare('ConfiguracionPractica_NombrePractica',$this->ConfiguracionPractica_NombrePractica);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('SesionInformada',$this->SesionInformada,true);
		$criteria->compare('Ejecutado',$this->Ejecutado);
		$criteria->compare('Supervisado',$this->Supervisado);
		$criteria->compare('ComentarioPlanificacion',$this->ComentarioPlanificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'SesionInformada ASC',
			),
		));
	}*/

    public function searchByRut($rut)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        $criteria=new CDbCriteria;

		$criteria->compare('CodPlanificacion',$this->CodPlanificacion);
		$criteria->compare('Estudiante_RutEstudiante',$rut);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ProfesorGuiaCP_RutProfGuiaCP',$this->ProfesorGuiaCP_RutProfGuiaCP);
		$criteria->compare('Curso',$this->Curso,true);
        $criteria->compare('ConfiguracionPractica_CodPractica',$this->ConfiguracionPractica_CodPractica);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('SesionInformada',$this->SesionInformada,true);
		$criteria->compare('Ejecutado',$this->Ejecutado);
		$criteria->compare('Supervisado',$this->Supervisado);
		$criteria->compare('ComentarioPlanificacion',$this->ComentarioPlanificacion,true);

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
	 * @return Planificacionclaseadministrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valfecha($attribute,$params)
	{
		if(fechavalida($this->Fecha)==false)
		$this->addError('Fecha','fecha no válida');
	}
    
    public function valcentro($attribute,$params)
	{
		if(centrovalido($this->CentroPractica_RBD)==false)
		$this->addError('CentroPractica_RBD','este centro no contiene profesores asignados');
	}
	
	public function getAdmins(){
		
		$queryCoordinador = "select RutCoordinador from docentecoordinadorpracticas where EstadoCoordinador = '1'";
		$queryDirector = "select RutDirector from directorcarrera where EstadoDirector = '1'";
		$queryResponsable = "select RutResponsable from docenteresponsablepractica where EstadoResponsable = '1'";
		
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
		
		return $rows;
	}
}
