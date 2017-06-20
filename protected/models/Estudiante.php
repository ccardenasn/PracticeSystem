<?php
include_once 'FunNombre.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunCorreo.php';
include_once 'FunNumeros.php';
include_once 'FunRut.php';
include_once 'FunCentro.php';
include_once 'FunClave.php';
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
 * @property integer $CentroPractica_RBD
 * @property string $ImagenEstudiante
 * @property string $SituacionFinalEstudiante
 * @property string $ObservacionEstudiante
 *
 * The followings are the available model relations:
 * @property Centropractica $centroPracticaRBD
 * @property Configuracionpractica $configuracionPracticaNombrePractica
 * @property Mencion $mencionNombreMencion
 * @property Profesorguiacp $profesorGuiaCPRutProfGuiaCP
 * @property Horario[] $horarios
 * @property Horarioadmin[] $horarioadmins
 * @property Planificacionclase[] $planificacionclases
 */
class Estudiante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    public $ConfirmClaveEstudiante;
    
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
            array('RutEstudiante, NombreEstudiante, ClaveEstudiante,ConfirmClaveEstudiante, FechaIncorporacion, Mencion_NombreMencion, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica, CentroPractica_RBD', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
                        // compare password to repeated password
            array('ConfirmClaveEstudiante', 'compare','operator'=>'==','compareAttribute'=>'ClaveEstudiante','allowEmpty'=>false),
            array('ConfirmClaveEstudiante', 'safe'),
            array('RutEstudiante','unique','className'=>'Estudiante','attributeName'=>'RutEstudiante','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'DirectorCarrera','attributeName'=>'RutDirector','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Docentecoordinadorpracticas','attributeName'=>'RutCoordinador','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Secretariacarrera','attributeName'=>'RutSecretaria','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Docenteresponsablepractica','attributeName'=>'RutResponsable','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Secretariacp','attributeName'=>'RutSecretariaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Directorcp','attributeName'=>'RutDirectorCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Jefeutpcp','attributeName'=>'RutJefeUTPCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Profesorcoordinadorpracticacp','attributeName'=>'RutProfCoordGuiaCp','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutEstudiante','unique','className'=>'Profesorguiacp','attributeName'=>'RutProfGuiaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutEstudiante, NombreEstudiante, ClaveEstudiante, FechaIncorporacion, Mencion_NombreMencion, MailEstudiante, TelefonoEstudiante, CelularEstudiante, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica, ImagenEstudiante, SituacionFinalEstudiante', 'length', 'max'=>45),
			array('ObservacionEstudiante', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutEstudiante, NombreEstudiante, ClaveEstudiante, FechaIncorporacion, Mencion_NombreMencion, MailEstudiante, TelefonoEstudiante, CelularEstudiante, ProfesorGuiaCP_RutProfGuiaCP, ConfiguracionPractica_NombrePractica, CentroPractica_RBD, ImagenEstudiante, SituacionFinalEstudiante, ObservacionEstudiante', 'safe', 'on'=>'search'),
			array('ImagenEstudiante','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar
            array('ImagenEstudiante','file','allowEmpty'=>true,'on'=>'create'),//permite campo vacio si no se carga imagen al actualizar
			array('NombreEstudiante','valnombre'),//permite el uso de metodo valnombre
            array('TelefonoEstudiante','valtelefono'),//permite el uso de metodo valtelefono
            array('CelularEstudiante','valcelular'),
            array('MailEstudiante','valcorreo'),
            array('FechaIncorporacion','valnumeros'),
            array('RutEstudiante','valrut'),
            array('RutEstudiante','valuniquerut','on'=>'insert'),
            array('CentroPractica_RBD','valcentro'),
            //array('ClaveEstudiante','valclave'),
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
			'mencionNombreMencion' => array(self::BELONGS_TO, 'Mencion', 'Mencion_NombreMencion'),
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
			'RutEstudiante' => 'Rut',
			'NombreEstudiante' => 'Nombre',
			'ClaveEstudiante' => 'Contraseña',
			'FechaIncorporacion' => 'Año de Incorporación',
			'Mencion_NombreMencion' => 'Mención',
			'MailEstudiante' => 'Correo',
			'TelefonoEstudiante' => 'Teléfono',
			'CelularEstudiante' => 'Celular',
			'ProfesorGuiaCP_RutProfGuiaCP' => 'Rut Profesor Guía CP',
			'profesorGuiaCPRutProfGuiaCP.NombreProfGuiaCP' => 'Nombre Profesor Guía CP',
			'ConfiguracionPractica_NombrePractica' => 'Nombre Práctica',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
			'ImagenEstudiante' => 'Imagen',
			'SituacionFinalEstudiante' => 'Situación Final',
			'ObservacionEstudiante' => 'Observación',
            'ConfirmClaveEstudiante' => 'Confirmar Contraseña'
		);
	}

    public function safeAttributes()
        {
                return array(
                        'ClaveEstudiante,ConfirmClaveEstudiante',
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
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenEstudiante',$this->ImagenEstudiante,true);
		$criteria->compare('SituacionFinalEstudiante',$this->SituacionFinalEstudiante,true);
		$criteria->compare('ObservacionEstudiante',$this->ObservacionEstudiante,true);

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
		$this->addError('NombreEstudiante','Nombre no válido');	
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoEstudiante)==false)
		$this->addError('TelefonoEstudiante','Teléfono no válido ');	
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularEstudiante)==false)
		$this->addError('CelularEstudiante','Celular no válido');	
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailEstudiante)==false)
		$this->addError('MailEstudiante','Correo no válido');
	}
    
    public function valnumeros($attribute,$params)
	{
		if(numerovalido($this->FechaIncorporacion)==false)
		$this->addError('FechaIncorporacion','Año no válido');
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutEstudiante)==false)
		$this->addError('RutEstudiante','Rut no válido');
	}
    
    public function valcentro($attribute,$params)
	{
		if(centrovalido($this->CentroPractica_RBD)==false)
		$this->addError('CentroPractica_RBD','este centro no contiene profesores asignados');
	}
    
    public function valuniquerut($attribute,$params)
	{
		if(uniquerut($this->RutEstudiante)==true)
		$this->addError('RutEstudiante','Este número de RUT ya existe.');
	}
    
    public function valuniquerutupdate($attribute,$params)
	{
		if(uniquerutupdate($this->RutEstudiante)==true)
		$this->addError('RutEstudiante','Este número de RUT ya existe.');
	}
    
    public function valclave($attribute,$params)
	{
		if(clavevalida($this->ClaveEstudiante,$this->ConfirmClaveEstudiante)==false)
		$this->addError('ClaveEstudiante','Debe repetir la contraseña correctamente.');
	}
    
    public function validatePassword($password){
		return $password===$this->ClaveEstudiante;	
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
