<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
include_once 'FunCentro.php';
/**
 * This is the model class for table "secretariacp".
 *
 * The followings are the available columns in table 'secretariacp':
 * @property string $RutSecretariaCP
 * @property string $NombreSecretariaCP
 * @property string $MailSecretariaCP
 * @property string $TelefonoSecretariaCP
 * @property string $CelularSecretariaCP
 * @property integer $CentroPractica_RBD
 * @property string $ImagenSecretariaCP
 *
 * The followings are the available model relations:
 * @property Centropractica $centroPracticaRBD
 */
class Secretariacp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'secretariacp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutSecretariaCP, NombreSecretariaCP, CentroPractica_RBD', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('RutSecretariaCP','unique','className'=>'Secretariacp','attributeName'=>'RutSecretariaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Estudiante','attributeName'=>'RutEstudiante','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
             array('RutSecretariaCP','unique','className'=>'Directorcarrera','attributeName'=>'RutDirector','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Docentecoordinadorpracticas','attributeName'=>'RutCoordinador','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Secretariacarrera','attributeName'=>'RutSecretaria','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Docenteresponsablepractica','attributeName'=>'RutResponsable','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            
            array('RutSecretariaCP','unique','className'=>'Directorcp','attributeName'=>'RutDirectorCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Jefeutpcp','attributeName'=>'RutJefeUTPCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Profesorcoordinadorpracticacp','attributeName'=>'RutProfCoordGuiaCp','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutSecretariaCP','unique','className'=>'Profesorguiacp','attributeName'=>'RutProfGuiaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutSecretariaCP, NombreSecretariaCP, MailSecretariaCP, TelefonoSecretariaCP, CelularSecretariaCP, ImagenSecretariaCP', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutSecretariaCP, NombreSecretariaCP, MailSecretariaCP, TelefonoSecretariaCP, CelularSecretariaCP, CentroPractica_RBD, ImagenSecretariaCP', 'safe', 'on'=>'search'),
            array('ImagenSecretariaCP','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenSecretariaCP','safe','on'=>'update'),
            array('RutSecretariaCP','valrut'),
            array('RutSecretariaCP','valuniquerut','on'=>'insert'),
            array('NombreSecretariaCP','valnombre'),
            array('MailSecretariaCP','valcorreo'),
            array('TelefonoSecretariaCP','valtelefono'),
            array('CelularSecretariaCP','valcelular'),
            array('CentroPractica_RBD','valcentro','on'=>'insert'),
            //array('CentroPractica_RBD','valcentroupdate','on'=>'update'),
            array('CentroPractica_RBD','unique','className'=>'Secretariacp','attributeName'=>'CentroPractica_RBD','message'=>'este centro ya tiene una secretaria asignada','on'=>'update'),
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
			'RutSecretariaCP' => 'Rut',
			'NombreSecretariaCP' => 'Nombre',
			'MailSecretariaCP' => 'Correo',
			'TelefonoSecretariaCP' => 'Teléfono',
			'CelularSecretariaCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
			'ImagenSecretariaCP' => 'Imagen',
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

		$criteria->compare('RutSecretariaCP',$this->RutSecretariaCP,true);
		$criteria->compare('NombreSecretariaCP',$this->NombreSecretariaCP,true);
		$criteria->compare('MailSecretariaCP',$this->MailSecretariaCP,true);
		$criteria->compare('TelefonoSecretariaCP',$this->TelefonoSecretariaCP,true);
		$criteria->compare('CelularSecretariaCP',$this->CelularSecretariaCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenSecretariaCP',$this->ImagenSecretariaCP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

		$criteria->compare('RutSecretariaCP',$this->RutSecretariaCP,true);
		$criteria->compare('NombreSecretariaCP',$this->NombreSecretariaCP,true);
		$criteria->compare('MailSecretariaCP',$this->MailSecretariaCP,true);
		$criteria->compare('TelefonoSecretariaCP',$this->TelefonoSecretariaCP,true);
		$criteria->compare('CelularSecretariaCP',$this->CelularSecretariaCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenSecretariaCP',$this->ImagenSecretariaCP,true);

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
	 * @return Secretariacp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutSecretariaCP)==false)
		$this->addError('RutSecretariaCP','Rut invalido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreSecretariaCP)==false)
		$this->addError('NombreSecretariaCP','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailSecretariaCP)==false)
		$this->addError('MailSecretariaCP','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoSecretariaCP)==false)
		$this->addError('TelefonoSecretariaCP','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularSecretariaCP)==false)
		$this->addError('CelularSecretariaCP','Celular no válido');
	}
    
    public function valcentro($attribute,$params)
	{
		if(secretariavalido($this->CentroPractica_RBD)==false)
		$this->addError('CentroPractica_RBD','este centro ya contiene una secretaria asignada');
	}
    
    public function valcentroupdate($attribute,$params)
	{
		if(secretariaupdatevalido($this->CentroPractica_RBD,$this->RutSecretariaCP)==false)
		$this->addError('CentroPractica_RBD','este centro ya contiene una secretaria asignada');
	}
    
    public function valuniquerut($attribute,$params)
	{
		if(uniquerut($this->RutSecretariaCP)==true)
		$this->addError('RutSecretariaCP','Este número de RUT ya existe.');
	}
	
	public function getAdmins(){
		
		$queryCoordinador = "select RutCoordinador from docentecoordinadorpracticas where EstadoCoordinador = '1'";
		$queryDirector = "select RutDirector from directorcarrera";
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
        
        if($rows == null){
            $rows[0] = "@";
        }
		
		return $rows;
	}
}
