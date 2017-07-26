<?php

/**
 * This is the model class for table "planificacionclase".
 *
 * The followings are the available columns in table 'planificacionclase':
 * @property integer $CodPlanificacion
 * @property string $Estudiante_RutEstudiante
 * @property integer $CentroPractica_RBD
 * @property string $ProfesorGuiaCP_RutProfGuiaCP
 * @property string $Curso
 * @property integer $ConfiguracionPractica_CodPractica
 * @property string $Fecha
 * @property string $SesionInformada
 * @property string $Ejecutado
 * @property string $Supervisado
 * @property string $ComentarioPlanificacion
 * @property string $DocumentoPlanificacion
 *
 * The followings are the available model relations:
 * @property Bitacorasesion[] $bitacorasesions
 * @property Centropractica $centroPracticaRBD
 * @property Configuracionpractica $configuracionPracticaCodPractica
 * @property Estudiante $estudianteRutEstudiante
 * @property Profesorguiacp $profesorGuiaCPRutProfGuiaCP
 */
class Planificacionclaseresponsable extends CActiveRecord
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
			array('Estudiante_RutEstudiante, CentroPractica_RBD, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_CodPractica', 'required'),
			array('CentroPractica_RBD, ConfiguracionPractica_CodPractica', 'numerical', 'integerOnly'=>true),
			array('Estudiante_RutEstudiante, ProfesorGuiaCP_RutProfGuiaCP, Curso, Fecha, SesionInformada, Ejecutado, Supervisado, DocumentoPlanificacion', 'length', 'max'=>45),
			array('ComentarioPlanificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodPlanificacion, Estudiante_RutEstudiante, CentroPractica_RBD, ProfesorGuiaCP_RutProfGuiaCP, Curso, ConfiguracionPractica_CodPractica, Fecha, SesionInformada, Ejecutado, Supervisado, ComentarioPlanificacion, DocumentoPlanificacion', 'safe', 'on'=>'search'),
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
            'estudianteRutEstudiante.NombreEstudiante' => 'NombreEstudiante',
			'CentroPractica_RBD' => 'Centro de Práctica',
            'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
			'ProfesorGuiaCP_RutProfGuiaCP' => 'Rut Profesor Guía CP',
            'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP' => 'Nombre Profesor Guía CP',
			'Curso' => 'Curso',
			'ConfiguracionPractica_CodPractica' => 'Práctica',
			'Fecha' => 'Fecha',
			'SesionInformada' => 'Sesion Informada',
			'Ejecutado' => 'Ejecutado',
			'Supervisado' => 'Supervisado',
			'ComentarioPlanificacion' => 'Comentario',
			'DocumentoPlanificacion' => 'Documento Planificación',
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
        $loggedResponsable=Yii::app()->user->name;
        
        $practicaRespModel=DocenteresponsablepracticaHasConfiguracionpractica::model()->findAll('DocenteResponsablePractica_RutResponsable=?',array($loggedResponsable));
        
        $c2 = new CDbCriteria;
        $c2->alias = 'Planificacionclaseresponsable';
        foreach ($practicaRespModel as $txt) { 
            $c2->compare('Planificacionclaseresponsable.ConfiguracionPractica_CodPractica', $txt->ConfiguracionPractica_CodPractica, true, 'OR');
        }
        
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
		$criteria->compare('DocumentoPlanificacion',$this->DocumentoPlanificacion,true);
        
        $criteria->mergeWith($c2); // Merge $c2 into $c1
        
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
	 * @return Planificacionclaseresponsable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
