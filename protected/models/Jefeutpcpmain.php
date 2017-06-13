<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
/**
 * This is the model class for table "jefeutpcp".
 *
 * The followings are the available columns in table 'jefeutpcp':
 * @property string $RutJefeUTPCP
 * @property string $NombreJefeUTPCP
 * @property string $MailJefeUTPCP
 * @property string $TelefonoJefeUTPCP
 * @property string $CelularJefeUTPCP
 * @property integer $CentroPractica_RBD
 * @property string $ImagenJefeUTPCP
 *
 * The followings are the available model relations:
 * @property Centropractica $centroPracticaRBD
 */
class Jefeutpcpmain extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jefeutpcp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutJefeUTPCP, NombreJefeUTPCP, CentroPractica_RBD', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutJefeUTPCP, NombreJefeUTPCP, MailJefeUTPCP, TelefonoJefeUTPCP, CelularJefeUTPCP, ImagenJefeUTPCP', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutJefeUTPCP, NombreJefeUTPCP, MailJefeUTPCP, TelefonoJefeUTPCP, CelularJefeUTPCP, CentroPractica_RBD, ImagenJefeUTPCP', 'safe', 'on'=>'search'),
            array('ImagenJefeUTPCP','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenJefeUTPCP','safe','on'=>'update'),
            array('RutJefeUTPCP','valrut'),
            array('NombreJefeUTPCP','valnombre'),
            array('MailJefeUTPCP','valcorreo'),
            array('TelefonoJefeUTPCP','valtelefono'),
            array('CelularJefeUTPCP','valcelular'),
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
			'RutJefeUTPCP' => 'Rut',
			'NombreJefeUTPCP' => 'Nombre',
			'MailJefeUTPCP' => 'Correo',
			'TelefonoJefeUTPCP' => 'Teléfono',
			'CelularJefeUTPCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'centroPracticaRBD.NombreCentroPractica' => 'Centro de Práctica',
			'ImagenJefeUTPCP' => 'Imagen',
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

		$criteria->compare('RutJefeUTPCP',$this->RutJefeUTPCP,true);
		$criteria->compare('NombreJefeUTPCP',$this->NombreJefeUTPCP,true);
		$criteria->compare('MailJefeUTPCP',$this->MailJefeUTPCP,true);
		$criteria->compare('TelefonoJefeUTPCP',$this->TelefonoJefeUTPCP,true);
		$criteria->compare('CelularJefeUTPCP',$this->CelularJefeUTPCP,true);
		$criteria->compare('CentroPractica_RBD',$this->CentroPractica_RBD);
		$criteria->compare('ImagenJefeUTPCP',$this->ImagenJefeUTPCP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jefeutpcpmain the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutJefeUTPCP)==false)
		$this->addError('RutJefeUTPCP','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreJefeUTPCP)==false)
		$this->addError('NombreJefeUTPCP','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailJefeUTPCP)==false)
		$this->addError('MailJefeUTPCP','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoJefeUTPCP)==false)
		$this->addError('TelefonoJefeUTPCP','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularJefeUTPCP)==false)
		$this->addError('CelularJefeUTPCP','Celular no válido');
	}
}