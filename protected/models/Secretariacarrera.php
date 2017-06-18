<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
/**
 * This is the model class for table "secretariacarrera".
 *
 * The followings are the available columns in table 'secretariacarrera':
 * @property string $RutSecretaria
 * @property string $NombreSecretaria
 * @property string $MailSecretaria
 * @property string $TelefonoSecretaria
 * @property string $CelularSecretaria
 * @property string $ImagenSecretaria
 * @property string $Carrera_codCarrera
 *
 * The followings are the available model relations:
 * @property Carrera $carreraCodCarrera
 */
class Secretariacarrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'secretariacarrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutSecretaria, NombreSecretaria, Carrera_codCarrera', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
			array('RutSecretaria, NombreSecretaria, MailSecretaria, TelefonoSecretaria, CelularSecretaria, ImagenSecretaria, Carrera_codCarrera', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutSecretaria, NombreSecretaria, MailSecretaria, TelefonoSecretaria, CelularSecretaria, ImagenSecretaria, Carrera_codCarrera', 'safe', 'on'=>'search'),
			 array('ImagenSecretaria','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenSecretaria','safe','on'=>'update'),
            array('RutSecretaria','valrut'),
            array('RutSecretaria','valuniquerut','on'=>'insert'),
            array('NombreSecretaria','valnombre'),
            array('MailSecretaria','valcorreo'),
            array('TelefonoSecretaria','valtelefono'),
            array('CelularSecretaria','valcelular'),
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
			'carreraCodCarrera' => array(self::BELONGS_TO, 'Carrera', 'Carrera_codCarrera'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutSecretaria' => 'Rut',
			'NombreSecretaria' => 'Nombre',
			'MailSecretaria' => 'Correo',
			'TelefonoSecretaria' => 'Teléfono',
			'CelularSecretaria' => 'Celular',
			'ImagenSecretaria' => 'Imagen',
			'Carrera_codCarrera' => 'Carrera',
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

		$criteria->compare('RutSecretaria',$this->RutSecretaria,true);
		$criteria->compare('NombreSecretaria',$this->NombreSecretaria,true);
		$criteria->compare('MailSecretaria',$this->MailSecretaria,true);
		$criteria->compare('TelefonoSecretaria',$this->TelefonoSecretaria,true);
		$criteria->compare('CelularSecretaria',$this->CelularSecretaria,true);
		$criteria->compare('ImagenSecretaria',$this->ImagenSecretaria,true);
		$criteria->compare('Carrera_codCarrera',$this->Carrera_codCarrera,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Secretariacarrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutSecretaria)==false)
		$this->addError('RutSecretaria','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreSecretaria)==false)
		$this->addError('NombreSecretaria','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailSecretaria)==false)
		$this->addError('MailSecretaria','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoSecretaria)==false)
		$this->addError('TelefonoSecretaria','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularSecretaria)==false)
		$this->addError('CelularSecretaria','Celular no válido');
	}
    
    public function valuniquerut($attribute,$params)
	{
		if(uniquerut($this->RutSecretaria)==true)
		$this->addError('RutSecretaria','Este número de RUT ya existe.');
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
