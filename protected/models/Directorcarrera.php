<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
/**
 * This is the model class for table "directorcarrera".
 *
 * The followings are the available columns in table 'directorcarrera':
 * @property string $RutDirector
 * @property string $NombreDirector
 * @property string $ClaveDirector
 * @property string $MailDirector
 * @property string $TelefonoDirector
 * @property string $CelularDirector
 * @property string $ImagenDirector
 */
class Directorcarrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'directorcarrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutDirector, NombreDirector, MailDirector', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('RutDirector','unique','className'=>'Directorcarrera','attributeName'=>'RutDirector','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirector','unique','className'=>'Estudiante','attributeName'=>'RutEstudiante','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'), array('RutDirector','unique','className'=>'Docentecoordinadorpracticas','attributeName'=>'RutCoordinador','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'), array('RutDirector','unique','className'=>'Secretariacarrera','attributeName'=>'RutSecretaria','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'), array('RutDirector','unique','className'=>'Docenteresponsablepractica','attributeName'=>'RutResponsable','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirector','unique','className'=>'Secretariacp','attributeName'=>'RutSecretariaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirector','unique','className'=>'Directorcp','attributeName'=>'RutDirectorCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirector','unique','className'=>'Jefeutpcp','attributeName'=>'RutJefeUTPCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirector','unique','className'=>'Profesorcoordinadorpracticacp','attributeName'=>'RutProfCoordGuiaCp','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirector','unique','className'=>'Profesorguiacp','attributeName'=>'RutProfGuiaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
			array('RutDirector, NombreDirector, ClaveDirector, MailDirector, TelefonoDirector, CelularDirector, ImagenDirector', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutDirector, NombreDirector, ClaveDirector, MailDirector, TelefonoDirector, CelularDirector, ImagenDirector', 'safe', 'on'=>'search'),
            array('ImagenDirector','file','types'=>'png,jpg,jpeg','wrongType'=>'Solo se permiten archivos con las extensiones .jpg, .png y .jpeg','maxSize'=>1048576,'tooLarge'=>'La imagen es demasiado grande, el tamaño máximo permitido es de 1 MB','allowEmpty'=>true,'on'=>'insert,update'),//permite campo vacio si no se carga imagen al actualizar
			array('ImagenDirector','safe','on'=>'update'),
            array('RutDirector','valrut'),
			array('RutDirector','valtrim'),
            array('RutDirector','valuniquerut','on'=>'insert'),
            array('NombreDirector','valnombre'),
            array('MailDirector','valcorreo'),
            array('TelefonoDirector','valtelefono'),
            array('CelularDirector','valcelular'),
            
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutDirector' => 'Rut',
			'NombreDirector' => 'Nombre',
			'ClaveDirector' => 'Clave',
			'MailDirector' => 'Correo',
			'TelefonoDirector' => 'Teléfono',
			'CelularDirector' => 'Celular',
			'ImagenDirector' => 'Imagen',
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

		$criteria->compare('RutDirector',$this->RutDirector,true);
		$criteria->compare('NombreDirector',$this->NombreDirector,true);
		$criteria->compare('ClaveDirector',$this->ClaveDirector,true);
		$criteria->compare('MailDirector',$this->MailDirector,true);
		$criteria->compare('TelefonoDirector',$this->TelefonoDirector,true);
		$criteria->compare('CelularDirector',$this->CelularDirector,true);
		$criteria->compare('ImagenDirector',$this->ImagenDirector,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

		$criteria->compare('RutDirector',$this->RutDirector,true);
		$criteria->compare('NombreDirector',$this->NombreDirector,true);
		$criteria->compare('ClaveDirector',$this->ClaveDirector,true);
		$criteria->compare('MailDirector',$this->MailDirector,true);
		$criteria->compare('TelefonoDirector',$this->TelefonoDirector,true);
		$criteria->compare('CelularDirector',$this->CelularDirector,true);
		$criteria->compare('ImagenDirector',$this->ImagenDirector,true);

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
	 * @return Directorcarrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutDirector)==false)
		$this->addError('RutDirector','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreDirector)==false)
		$this->addError('NombreDirector','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailDirector)==false)
		$this->addError('MailDirector','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoDirector)==false)
		$this->addError('TelefonoDirector','Teléfono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularDirector)==false)
		$this->addError('CelularDirector','Celular no válido');
	}
    
    public function valuniquerut($attribute,$params)
	{
		if(uniquerut($this->RutDirector)==true)
		$this->addError('RutDirector','Este número de RUT ya existe.');
	}
	
	public function valtrim($attribute,$params)
	{
		if(checktrimvalue($this->RutDirector)==false)
		$this->addError('RutDirector','No deje espacios al escribir rut.');
	}
    
    public function validatePassword($password){
		return $password===$this->ClaveDirector;	
	}
	
	public function getAdmins(){
		
		$queryCoordinador = "select RutCoordinador from docentecoordinadorpracticas where EstadoCoordinador = '1'";
		$queryDirector = "select RutDirector from directorcarrera where EstadoDirector = '1'";
		//$queryResponsable = "select RutResponsable from docenteresponsablepractica where EstadoResponsable = '1'";
		
		$commandCoordinador= Yii::app()->db->createCommand($queryCoordinador);
		$commandDirector= Yii::app()->db->createCommand($queryDirector);
		//$commandResponsable= Yii::app()->db->createCommand($queryResponsable);
		
		$rows = array();
		$dataReaderCoordinador=$commandCoordinador->query();
		
		while(($row=$dataReaderCoordinador->read())!==false){
			array_push($rows, $row['RutCoordinador']);
		}
		
		$dataReaderDirector=$commandDirector->query();
		
		while(($row=$dataReaderDirector->read())!==false){
			array_push($rows, $row['RutDirector']);
		}
		
		/*$dataReaderResponsable=$commandResponsable->query();
		
		while(($row=$dataReaderResponsable->read())!==false){
			array_push($rows, $row['RutResponsable']);
		}*/
        
        if($rows == null){
            $rows[0] = "denied";
        }
		
		return $rows;
	}
}
