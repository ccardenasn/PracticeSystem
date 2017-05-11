<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
/**
 * This is the model class for table "docentecoordinadorpracticas".
 *
 * The followings are the available columns in table 'docentecoordinadorpracticas':
 * @property string $RutCoordinador
 * @property string $NombreCoordinador
 * @property string $ClaveCoordinador
 * @property string $MailCoordinador
 * @property string $TelefonoCoordinador
 * @property string $CelularCoordinador
 * @property string $ImagenCoordinador
 *
 * The followings are the available model relations:
 * @property Configuracionpractica[] $configuracionpracticas
 */
class Docentecoordinadorpracticas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'docentecoordinadorpracticas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutCoordinador, NombreCoordinador, ClaveCoordinador', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
			array('RutCoordinador, NombreCoordinador, ClaveCoordinador, MailCoordinador, TelefonoCoordinador, CelularCoordinador, ImagenCoordinador', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutCoordinador, NombreCoordinador, ClaveCoordinador, MailCoordinador, TelefonoCoordinador, CelularCoordinador, ImagenCoordinador', 'safe', 'on'=>'search'),
            array('ImagenCoordinador','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenCoordinador','safe','on'=>'update'),
            array('RutCoordinador','valrut'),
            array('NombreCoordinador','valnombre'),
            array('MailCoordinador','valcorreo'),
            array('TelefonoCoordinador','valtelefono'),
            array('CelularCoordinador','valcelular'),
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
			'configuracionpracticas' => array(self::HAS_MANY, 'Configuracionpractica', 'DocenteCoordinadorPracticas_RutCoordinador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutCoordinador' => 'Rut',
			'NombreCoordinador' => 'Nombre',
			'ClaveCoordinador' => 'Clave',
			'MailCoordinador' => 'Correo',
			'TelefonoCoordinador' => 'Teléfono',
			'CelularCoordinador' => 'Celular',
			'ImagenCoordinador' => 'Imagen',
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

		$criteria->compare('RutCoordinador',$this->RutCoordinador,true);
		$criteria->compare('NombreCoordinador',$this->NombreCoordinador,true);
		$criteria->compare('ClaveCoordinador',$this->ClaveCoordinador,true);
		$criteria->compare('MailCoordinador',$this->MailCoordinador,true);
		$criteria->compare('TelefonoCoordinador',$this->TelefonoCoordinador,true);
		$criteria->compare('CelularCoordinador',$this->CelularCoordinador,true);
		$criteria->compare('ImagenCoordinador',$this->ImagenCoordinador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Docentecoordinadorpracticas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutCoordinador)==false)
		$this->addError('RutCoordinador','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreCoordinador)==false)
		$this->addError('NombreCoordinador','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailCoordinador)==false)
		$this->addError('MailCoordinador','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoCoordinador)==false)
		$this->addError('TelefonoCoordinador','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularCoordinador)==false)
		$this->addError('CelularCoordinador','Celular no válido');
	}
    
    public function validatePassword($password){
		return $password===$this->ClaveCoordinador;	
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
		
		return $rows;
	}
}
