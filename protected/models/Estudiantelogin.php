<?php

/**
 * This is the model class for table "estudiante".
 *
 * The followings are the available columns in table 'estudiante':
 * @property string $RutEstudiante
 * @property string $NombreEstudiante
 * @property string $ClaveEstudiante
 * @property string $FechaIncorporacion
 * @property integer $Mencion_CodMencion
 * @property string $MailEstudiante
 * @property string $TelefonoEstudiante
 * @property string $CelularEstudiante
 * @property string $ProfesorGuiaCP_RutProfGuiaCP
 * @property string $ConfiguracionPractica_NombrePractica
 * @property integer $CentroPractica_RBD
 * @property string $ImagenEstudiante
 * @property string $SituacionFinalEstudiante
 * @property string $ObservacionEstudiante
 * @property integer $Estado
 *
 * The followings are the available model relations:
 * @property Centropractica $centroPracticaRBD
 * @property Configuracionpractica $configuracionPracticaNombrePractica
 * @property Mencion $mencionCodMencion
 * @property Profesorguiacp $profesorGuiaCPRutProfGuiaCP
 * @property Horario[] $horarios
 * @property Horarioadmin[] $horarioadmins
 * @property Planificacionclase[] $planificacionclases
 */
class Estudiantelogin extends CActiveRecord
{
    public $ConfirmClaveEstudiante;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estudiante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutEstudiante, Mencion_CodMencion, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_CodPractica, CentroPractica_RBD, ClaveEstudiante, ConfirmClaveEstudiante', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
			array('Mencion_CodMencion, CentroPractica_RBD, Estado', 'numerical', 'integerOnly'=>true),
			array('RutEstudiante, NombreEstudiante, ClaveEstudiante, FechaIncorporacion, MailEstudiante, TelefonoEstudiante, CelularEstudiante, ProfesorGuiaCP_RutProfGuiaCP, ImagenEstudiante, SituacionFinalEstudiante', 'length', 'max'=>45),
			array('ObservacionEstudiante', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutEstudiante, NombreEstudiante, ClaveEstudiante,ConfirmClaveEstudiante, FechaIncorporacion, Mencion_CodMencion, MailEstudiante, TelefonoEstudiante, CelularEstudiante, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica, CentroPractica_RBD, ImagenEstudiante, SituacionFinalEstudiante, ObservacionEstudiante, Estado', 'safe', 'on'=>'search'),
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
			'centroPracticaRBD' => array(self::BELONGS_TO, 'Centropractica', 'CentroPractica_RBD'),
			'configuracionPracticaNombrePractica' => array(self::BELONGS_TO, 'Configuracionpractica', 'ConfiguracionPractica_NombrePractica'),
			'mencionCodMencion' => array(self::BELONGS_TO, 'Mencion', 'Mencion_CodMencion'),
			'profesorGuiaCPRutProfGuiaCP' => array(self::BELONGS_TO, 'Profesorguiacp', 'ProfesorGuiaCP_RutProfGuiaCP'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'Estudiante_RutEstudiante'),
			'horarioadmins' => array(self::HAS_MANY, 'Horarioadmin', 'Estudiante_RutEstudiante'),
			'planificacionclases' => array(self::HAS_MANY, 'Planificacionclase', 'Estudiante_RutEstudiante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutEstudiante' => 'Rut Estudiante',
			'NombreEstudiante' => 'Nombre Estudiante',
			'ClaveEstudiante' => 'Contraseña',
            'ConfirmClaveEstudiante' => 'Confirmar Contraseña',
			'FechaIncorporacion' => 'Fecha Incorporacion',
			'Mencion_CodMencion' => 'Mencion Cod Mencion',
			'MailEstudiante' => 'Mail Estudiante',
			'TelefonoEstudiante' => 'Telefono Estudiante',
			'CelularEstudiante' => 'Celular Estudiante',
			'ProfesorGuiaCP_RutProfGuiaCP' => 'Profesor Guia Cp Rut Prof Guia Cp',
			'ConfiguracionPractica_NombrePractica' => 'Configuracion Practica Nombre Practica',
			'CentroPractica_RBD' => 'Centro Practica Rbd',
			'ImagenEstudiante' => 'Imagen Estudiante',
			'SituacionFinalEstudiante' => 'Situacion Final Estudiante',
			'ObservacionEstudiante' => 'Observacion Estudiante',
			'Estado' => 'Estado',
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

		$criteria->compare('RutEstudiante',$this->RutEstudiante,true);
		$criteria->compare('NombreEstudiante',$this->NombreEstudiante,true);
		$criteria->compare('ClaveEstudiante',$this->ClaveEstudiante,true);
		$criteria->compare('FechaIncorporacion',$this->FechaIncorporacion,true);
		$criteria->compare('Mencion_CodMencion',$this->Mencion_CodMencion);
		$criteria->compare('MailEstudiante',$this->MailEstudiante,true);
		$criteria->compare('TelefonoEstudiante',$this->TelefonoEstudiante,true);
		$criteria->compare('CelularEstudiante',$this->CelularEstudiante,true);
		$criteria->compare('ProfesorGuiaCP_RutProfGuiaCP',$this->ProfesorGuiaCP_RutProfGuiaCP,true);
		$criteria->compare('ConfiguracionPractica_NombrePractica',$this->ConfiguracionPractica_NombrePractica,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenEstudiante',$this->ImagenEstudiante,true);
		$criteria->compare('SituacionFinalEstudiante',$this->SituacionFinalEstudiante,true);
		$criteria->compare('ObservacionEstudiante',$this->ObservacionEstudiante,true);
		$criteria->compare('Estado',$this->Estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estudiantelogin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
