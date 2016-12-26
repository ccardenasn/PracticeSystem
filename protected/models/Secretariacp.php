<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
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
			array('RutSecretariaCP, CentroPractica_RBD', 'required'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutSecretariaCP, NombreSecretariaCP, MailSecretariaCP, TelefonoSecretariaCP, CelularSecretariaCP, ImagenSecretariaCP', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutSecretariaCP, NombreSecretariaCP, MailSecretariaCP, TelefonoSecretariaCP, CelularSecretariaCP, CentroPractica_RBD, ImagenSecretariaCP', 'safe', 'on'=>'search'),
            array('ImagenSecretariaCP','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenSecretariaCP','safe','on'=>'update'),
            array('RutSecretariaCP','valrut'),
            array('NombreSecretariaCP','valnombre'),
            array('MailSecretariaCP','valcorreo'),
            array('TelefonoSecretariaCP','valtelefono'),
            array('CelularSecretariaCP','valcelular'),
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
			'MailSecretariaCP' => 'Mail',
			'TelefonoSecretariaCP' => 'Telefono',
			'CelularSecretariaCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
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
		$this->addError('NombreSecretariaCP','Nombre invalido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailSecretariaCP)==false)
		$this->addError('MailSecretariaCP','Correo invalido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(telefonovalido($this->TelefonoSecretariaCP)==false)
		$this->addError('TelefonoSecretariaCP','Telefono invalido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(celularvalido($this->CelularSecretariaCP)==false)
		$this->addError('CelularSecretariaCP','Celular invalido');
	}
}
