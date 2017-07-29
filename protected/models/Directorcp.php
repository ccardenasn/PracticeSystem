<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
include_once 'FunCentro.php';
/**
 * This is the model class for table "directorcp".
 *
 * The followings are the available columns in table 'directorcp':
 * @property string $RutDirectorCP
 * @property string $NombreDirectorCP
 * @property string $MailDirectorCP
 * @property string $TelefonoDirectorCP
 * @property string $CelularDirectorCP
 * @property integer $CentroPractica_RBD
 * @property string $ImagenDirectorCP
 *
 * The followings are the available model relations:
 * @property Centropractica $centroPracticaRBD
 */
class Directorcp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'directorcp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutDirectorCP, NombreDirectorCP, CentroPractica_RBD', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('RutDirectorCP','unique','className'=>'Directorcp','attributeName'=>'RutDirectorCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Secretariacp','attributeName'=>'RutSecretariaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Estudiante','attributeName'=>'RutEstudiante','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
             array('RutDirectorCP','unique','className'=>'Directorcarrera','attributeName'=>'RutDirector','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Docentecoordinadorpracticas','attributeName'=>'RutCoordinador','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Secretariacarrera','attributeName'=>'RutSecretaria','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Docenteresponsablepractica','attributeName'=>'RutResponsable','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            
            array('RutDirectorCP','unique','className'=>'Jefeutpcp','attributeName'=>'RutJefeUTPCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Profesorcoordinadorpracticacp','attributeName'=>'RutProfCoordGuiaCp','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutDirectorCP','unique','className'=>'Profesorguiacp','attributeName'=>'RutProfGuiaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutDirectorCP, NombreDirectorCP, MailDirectorCP, TelefonoDirectorCP, CelularDirectorCP, ImagenDirectorCP', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutDirectorCP, NombreDirectorCP, MailDirectorCP, TelefonoDirectorCP, CelularDirectorCP, CentroPractica_RBD, ImagenDirectorCP', 'safe', 'on'=>'search'),
            array('ImagenDirectorCP','file','types'=>'png,jpg,jpeg','wrongType'=>'Solo se permiten archivos con las extensiones .jpg, .png y .jpeg','maxSize'=>1048576,'tooLarge'=>'La imagen es demasiado grande, el tamaño máximo permitido es de 1 MB','allowEmpty'=>true,'on'=>'insert,update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenDirectorCP','safe','on'=>'update'),
            array('RutDirectorCP','valrut'),
            array('RutDirectorCP','valuniquerut','on'=>'insert'),
            array('NombreDirectorCP','valnombre'),
            array('MailDirectorCP','valcorreo'),
            array('TelefonoDirectorCP','valtelefono'),
            array('CelularDirectorCP','valcelular'),
            array('CentroPractica_RBD','valcentro','on'=>'insert'),
            //array('CentroPractica_RBD','valcentroupdate','on'=>'update'),
            array('CentroPractica_RBD','unique','className'=>'Directorcp','attributeName'=>'CentroPractica_RBD','message'=>'este centro ya tiene una secretaria asignada','on'=>'update'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutDirectorCP' => 'Rut',
			'NombreDirectorCP' => 'Nombre',
			'MailDirectorCP' => 'Correo',
			'TelefonoDirectorCP' => 'Teléfono',
			'CelularDirectorCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
			'ImagenDirectorCP' => 'Imagen',
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

		$criteria->compare('RutDirectorCP',$this->RutDirectorCP,true);
		$criteria->compare('NombreDirectorCP',$this->NombreDirectorCP,true);
		$criteria->compare('MailDirectorCP',$this->MailDirectorCP,true);
		$criteria->compare('TelefonoDirectorCP',$this->TelefonoDirectorCP,true);
		$criteria->compare('CelularDirectorCP',$this->CelularDirectorCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenDirectorCP',$this->ImagenDirectorCP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

		$criteria->compare('RutDirectorCP',$this->RutDirectorCP,true);
		$criteria->compare('NombreDirectorCP',$this->NombreDirectorCP,true);
		$criteria->compare('MailDirectorCP',$this->MailDirectorCP,true);
		$criteria->compare('TelefonoDirectorCP',$this->TelefonoDirectorCP,true);
		$criteria->compare('CelularDirectorCP',$this->CelularDirectorCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenDirectorCP',$this->ImagenDirectorCP,true);

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
	 * @return Directorcp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutDirectorCP)==false)
		$this->addError('RutDirectorCP','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreDirectorCP)==false)
		$this->addError('NombreDirectorCP','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailDirectorCP)==false)
		$this->addError('MailDirectorCP','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoDirectorCP)==false)
		$this->addError('TelefonoDirectorCP','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularDirectorCP)==false)
		$this->addError('CelularDirectorCP','Celular no válido');
	}
    
    public function valcentro($attribute,$params)
	{
		if(directorvalido($this->CentroPractica_RBD)==false)
		$this->addError('CentroPractica_RBD','este centro ya contiene un director asignado');
	}
    
    public function valcentroupdate($attribute,$params)
	{
		if(directorupdatevalido($this->CentroPractica_RBD,$this->RutDirectorCP)==false)
		$this->addError('CentroPractica_RBD','este centro ya contiene una secretaria asignada');
	}
    
    public function valuniquerut($attribute,$params)
	{
		if(uniquerut($this->RutDirectorCP)==true)
		$this->addError('RutDirectorCP','Este número de RUT ya existe.');
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
            $rows[0] = "@";
        }
		
		return $rows;
	}
}
