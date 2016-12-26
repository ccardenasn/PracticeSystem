<?php
include_once 'FunNombre.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunCorreo.php';
include_once 'FunNumeros.php';
include_once 'FunRut.php';
/**
 * This is the model class for table "estudiante".
 *
 * The followings are the available columns in table 'estudiante':
 * @property string $RutEstudiante
 * @property string $NombreEstudiante
 * @property string $ClaveEstudiante
 * @property string $FechaIncorporacion
 * @property string $Mencion_NombreMencion
 * @property string $MailEstudiante
 * @property string $TelefonoEstudiante
 * @property string $CelularEstudiante
 * @property string $ProfesorGuiaCP_RutProfGuiaCP
 * @property string $ConfiguracionPractica_NombrePractica
 * @property string $ImagenEstudiante
 * @property string $SesionesPlanificadas
 * @property string $HorasPlanificadas
 *
 * The followings are the available model relations:
 * @property Configuracionpractica $configuracionPracticaNombrePractica
 * @property Mencion $mencionNombreMencion
 * @property Profesorguiacp $profesorGuiaCPRutProfGuiaCP
 */
class Perfilestudiante extends CActiveRecord
{
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
			array('RutEstudiante, Mencion_NombreMencion, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica', 'required'),
			array('RutEstudiante, NombreEstudiante, ClaveEstudiante, FechaIncorporacion, Mencion_NombreMencion, MailEstudiante, TelefonoEstudiante, CelularEstudiante, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica, ImagenEstudiante, SesionesPlanificadas, HorasPlanificadas', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutEstudiante, NombreEstudiante, ClaveEstudiante, FechaIncorporacion, Mencion_NombreMencion, MailEstudiante, TelefonoEstudiante, CelularEstudiante, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica, ImagenEstudiante, SesionesPlanificadas, HorasPlanificadas', 'safe', 'on'=>'search'),
            array('NombreEstudiante','valnombre'),//permite el uso de metodo valnombre
            array('TelefonoEstudiante','valtelefono'),//permite el uso de metodo valtelefono
            array('CelularEstudiante','valcelular'),
            array('MailEstudiante','valcorreo'),
            array('FechaIncorporacion','valnumeros'),
            array('RutEstudiante','valrut'),
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
			'configuracionPracticaNombrePractica' => array(self::BELONGS_TO, 'Configuracionpractica', 'ConfiguracionPractica_NombrePractica'),
			'mencionNombreMencion' => array(self::BELONGS_TO, 'Mencion', 'Mencion_NombreMencion'),
			'profesorGuiaCPRutProfGuiaCP' => array(self::BELONGS_TO, 'Profesorguiacp', 'ProfesorGuiaCP_RutProfGuiaCP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutEstudiante' => 'Rut',
			'NombreEstudiante' => 'Nombre',
			'ClaveEstudiante' => 'Clave',
			'FechaIncorporacion' => 'Año de Incorporacion',
			'Mencion_NombreMencion' => 'Mencion',
			'MailEstudiante' => 'Mail',
			'TelefonoEstudiante' => 'Telefono',
			'CelularEstudiante' => 'Celular',
			'ProfesorGuiaCP_RutProfGuiaCP' => 'Profesor Guia CP',
			'ConfiguracionPractica_NombrePractica' => 'Práctica',
			'ImagenEstudiante' => 'Imagen',
			'SesionesPlanificadas' => 'Sesiones Planificadas',
			'HorasPlanificadas' => 'Horas Planificadas',
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
		$criteria->compare('Mencion_NombreMencion',$this->Mencion_NombreMencion,true);
		$criteria->compare('MailEstudiante',$this->MailEstudiante,true);
		$criteria->compare('TelefonoEstudiante',$this->TelefonoEstudiante,true);
		$criteria->compare('CelularEstudiante',$this->CelularEstudiante,true);
		$criteria->compare('ProfesorGuiaCP_RutProfGuiaCP',$this->ProfesorGuiaCP_RutProfGuiaCP,true);
		$criteria->compare('ConfiguracionPractica_NombrePractica',$this->ConfiguracionPractica_NombrePractica,true);
		$criteria->compare('ImagenEstudiante',$this->ImagenEstudiante,true);
		$criteria->compare('SesionesPlanificadas',$this->SesionesPlanificadas,true);
		$criteria->compare('HorasPlanificadas',$this->HorasPlanificadas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estudiante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreEstudiante)==false)
		$this->addError('NombreEstudiante','Nombre invalido');	
	}
    
    public function valtelefono($attribute,$params)
	{
		if(telefonovalido($this->TelefonoEstudiante)==false)
		$this->addError('TelefonoEstudiante','Telefono invalido');	
	}
    
    public function valcelular($attribute,$params)
	{
		if(celularvalido($this->CelularEstudiante)==false)
		$this->addError('CelularEstudiante','Celular invalido');	
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailEstudiante)==false)
		$this->addError('MailEstudiante','Correo invalido');
	}
    
    public function valnumeros($attribute,$params)
	{
		if(numerovalido($this->FechaIncorporacion)==false)
		$this->addError('FechaIncorporacion','Año invalido');
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutEstudiante)==false)
		$this->addError('RutEstudiante','Rut invalido');
	}
    
    public function validatePassword($password){
		return $password===$this->ClaveEstudiante;	
	}
}
