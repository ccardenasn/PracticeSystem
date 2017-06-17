<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
include_once 'FunCentro.php';
/**
 * This is the model class for table "profesorcoordinadorpracticacp".
 *
 * The followings are the available columns in table 'profesorcoordinadorpracticacp':
 * @property string $RutProfCoordGuiaCp
 * @property string $NombreProfCoordGuiaCP
 * @property string $MailProfCoordGuiaCP
 * @property string $TelefonoProfCoordGuiaCP
 * @property string $CelularProfCoordGuiaCP
 * @property integer $CentroPractica_RBD
 * @property string $ImagenProfCoordGuiaCP
 *
 * The followings are the available model relations:
 * @property Centropractica $centroPracticaRBD
 */
class Profesorcoordinadorpracticacp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesorcoordinadorpracticacp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutProfCoordGuiaCp, NombreProfCoordGuiaCP, CentroPractica_RBD', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('RutProfCoordGuiaCp','unique','message'=>'El número de {attribute} {value} ya existe.'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutProfCoordGuiaCp, NombreProfCoordGuiaCP, MailProfCoordGuiaCP, TelefonoProfCoordGuiaCP, CelularProfCoordGuiaCP, ImagenProfCoordGuiaCP', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutProfCoordGuiaCp, NombreProfCoordGuiaCP, MailProfCoordGuiaCP, TelefonoProfCoordGuiaCP, CelularProfCoordGuiaCP, CentroPractica_RBD, ImagenProfCoordGuiaCP', 'safe', 'on'=>'search'),
            array('ImagenProfCoordGuiaCP','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenProfCoordGuiaCP','safe','on'=>'update'),
            array('RutProfCoordGuiaCp','valrut'),
            array('NombreProfCoordGuiaCP','valnombre'),
            array('MailProfCoordGuiaCP','valcorreo'),
            array('TelefonoProfCoordGuiaCP','valtelefono'),
            array('CelularProfCoordGuiaCP','valcelular'),
            array('CentroPractica_RBD','valcentro'),
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
			'RutProfCoordGuiaCp' => 'Rut',
			'NombreProfCoordGuiaCP' => 'Nombre',
			'MailProfCoordGuiaCP' => 'Correo',
			'TelefonoProfCoordGuiaCP' => 'Teléfono',
			'CelularProfCoordGuiaCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
			'ImagenProfCoordGuiaCP' => 'Imagen',
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

		$criteria->compare('RutProfCoordGuiaCp',$this->RutProfCoordGuiaCp,true);
		$criteria->compare('NombreProfCoordGuiaCP',$this->NombreProfCoordGuiaCP,true);
		$criteria->compare('MailProfCoordGuiaCP',$this->MailProfCoordGuiaCP,true);
		$criteria->compare('TelefonoProfCoordGuiaCP',$this->TelefonoProfCoordGuiaCP,true);
		$criteria->compare('CelularProfCoordGuiaCP',$this->CelularProfCoordGuiaCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenProfCoordGuiaCP',$this->ImagenProfCoordGuiaCP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesorcoordinadorpracticacp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutProfCoordGuiaCp)==false)
		$this->addError('RutProfCoordGuiaCp','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreProfCoordGuiaCP)==false)
		$this->addError('NombreProfCoordGuiaCP','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailProfCoordGuiaCP)==false)
		$this->addError('MailProfCoordGuiaCP','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoProfCoordGuiaCP)==false)
		$this->addError('TelefonoProfCoordGuiaCP','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularProfCoordGuiaCP)==false)
		$this->addError('CelularProfCoordGuiaCP','Celular no válido');
	}
    
    public function valcentro($attribute,$params)
	{
		if(profesorcoordinadorvalido($this->CentroPractica_RBD)==false)
		$this->addError('CentroPractica_RBD','este centro ya contiene un profesor coordinador asignado');
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
