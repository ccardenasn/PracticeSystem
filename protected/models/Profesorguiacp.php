<?php
include_once 'FunNombre.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunCorreo.php';
include_once 'FunNumeros.php';
include_once 'FunRut.php';
/**
 * This is the model class for table "profesorguiacp".
 *
 * The followings are the available columns in table 'profesorguiacp':
 * @property string $RutProfGuiaCP
 * @property string $NombreProfGuiaCP
 * @property string $CursoProfGuiaCP
 * @property string $ProfesorJefeProfGuiaCP
 * @property string $MailProfGuiaCP
 * @property string $TelefonoProfGuiaCP
 * @property string $CelularProfGuiaCP
 * @property integer $CentroPractica_RBD
 * @property string $ImagenProfGuiaCP
 *
 * The followings are the available model relations:
 * @property Estudiante[] $estudiantes
 * @property Planificacionclase[] $planificacionclases
 * @property Centropractica $centroPracticaRBD
 */
class Profesorguiacp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesorguiacp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutProfGuiaCP, NombreProfGuiaCP, CursoProfGuiaCP, CentroPractica_RBD', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('RutProfGuiaCP','unique','className'=>'Profesorguiacp','attributeName'=>'RutProfGuiaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Estudiante','attributeName'=>'RutEstudiante','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
             array('RutProfGuiaCP','unique','className'=>'Directorcarrera','attributeName'=>'RutDirector','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Docentecoordinadorpracticas','attributeName'=>'RutCoordinador','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Secretariacarrera','attributeName'=>'RutSecretaria','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Docenteresponsablepractica','attributeName'=>'RutResponsable','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            
            array('RutProfGuiaCP','unique','className'=>'Directorcp','attributeName'=>'RutDirectorCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Secretariacp','attributeName'=>'RutSecretariaCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Jefeutpcp','attributeName'=>'RutJefeUTPCP','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            array('RutProfGuiaCP','unique','className'=>'Profesorcoordinadorpracticacp','attributeName'=>'RutProfCoordGuiaCp','message'=>'El número de {attribute} {value} ya existe.','on'=>'update'),
            
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutProfGuiaCP, NombreProfGuiaCP, CursoProfGuiaCP, ProfesorJefeProfGuiaCP, MailProfGuiaCP, TelefonoProfGuiaCP, CelularProfGuiaCP, ImagenProfGuiaCP', 'length', 'max'=>45),
            array('ImagenProfGuiaCP','file','types'=>'png,jpg,jpeg','wrongType'=>'Solo se permiten archivos con las extensiones .jpg, .png y .jpeg','maxSize'=>1048576,'tooLarge'=>'La imagen es demasiado grande, el tamaño máximo permitido es de 1 MB','allowEmpty'=>true,'on'=>'insert,update'),//permite campo vacio si no se carga imagen al actualizar
            array('ImagenProfGuiaCP','safe','on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutProfGuiaCP, NombreProfGuiaCP, CursoProfGuiaCP, ProfesorJefeProfGuiaCP, MailProfGuiaCP, TelefonoProfGuiaCP, CelularProfGuiaCP, CentroPractica_RBD, ImagenProfGuiaCP', 'safe', 'on'=>'search'),
			array('RutProfGuiaCP','valrut'),
            array('RutProfGuiaCP','valuniquerut','on'=>'insert'),
            array('NombreProfGuiaCP','valnombre'),
            array('MailProfGuiaCP','valcorreo'),
            array('TelefonoProfGuiaCP','valtelefono'),
            array('CelularProfGuiaCP','valcelular'),
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
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'ProfesorGuiaCP_RutProfGuiaCP'),
			'planificacionclases' => array(self::HAS_MANY, 'Planificacionclase', 'ProfesorGuiaCP_RutProfGuiaCP'),
			'centroPracticaRBD' => array(self::BELONGS_TO, 'Centropractica', 'CentroPractica_RBD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutProfGuiaCP' => 'Rut',
			'NombreProfGuiaCP' => 'Nombre',
			'CursoProfGuiaCP' => 'Curso',
			'ProfesorJefeProfGuiaCP' => 'Profesor Jefe',
			'MailProfGuiaCP' => 'Correo',
			'TelefonoProfGuiaCP' => 'Teléfono',
			'CelularProfGuiaCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'ImagenProfGuiaCP' => 'Imagen',
            'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
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

		$criteria->compare('RutProfGuiaCP',$this->RutProfGuiaCP,true);
		$criteria->compare('NombreProfGuiaCP',$this->NombreProfGuiaCP,true);
		$criteria->compare('CursoProfGuiaCP',$this->CursoProfGuiaCP,true);
		$criteria->compare('ProfesorJefeProfGuiaCP',$this->ProfesorJefeProfGuiaCP,true);
		$criteria->compare('MailProfGuiaCP',$this->MailProfGuiaCP,true);
		$criteria->compare('TelefonoProfGuiaCP',$this->TelefonoProfGuiaCP,true);
		$criteria->compare('CelularProfGuiaCP',$this->CelularProfGuiaCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenProfGuiaCP',$this->ImagenProfGuiaCP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

		$criteria->compare('RutProfGuiaCP',$this->RutProfGuiaCP,true);
		$criteria->compare('NombreProfGuiaCP',$this->NombreProfGuiaCP,true);
		$criteria->compare('CursoProfGuiaCP',$this->CursoProfGuiaCP,true);
		$criteria->compare('ProfesorJefeProfGuiaCP',$this->ProfesorJefeProfGuiaCP);
		$criteria->compare('MailProfGuiaCP',$this->MailProfGuiaCP,true);
		$criteria->compare('TelefonoProfGuiaCP',$this->TelefonoProfGuiaCP,true);
		$criteria->compare('CelularProfGuiaCP',$this->CelularProfGuiaCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenProfGuiaCP',$this->ImagenProfGuiaCP,true);

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
	 * @return Profesorguiacp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutProfGuiaCP)==false)
		$this->addError('RutProfGuiaCP','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreProfGuiaCP)==false)
		$this->addError('NombreProfGuiaCP','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailProfGuiaCP)==false)
		$this->addError('MailProfGuiaCP','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoProfGuiaCP)==false)
		$this->addError('TelefonoProfGuiaCP','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularProfGuiaCP)==false)
		$this->addError('CelularProfGuiaCP','Celular no válido');
	}
    
    public function valuniquerut($attribute,$params)
	{
		if(uniquerut($this->RutProfGuiaCP)==true)
		$this->addError('RutProfGuiaCP','Este número de RUT ya existe.');
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
