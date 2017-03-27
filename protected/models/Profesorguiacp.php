<?php
/*include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';*/
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
 * @property Centropractica $centroPracticaRBD
 */
class Profesorguiacp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	
	public $updateType;
	
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
			array('RutProfGuiaCP, CentroPractica_RBD', 'required'),
			array('CentroPractica_RBD', 'numerical', 'integerOnly'=>true),
			array('RutProfGuiaCP, NombreProfGuiaCP, CursoProfGuiaCP, ProfesorJefeProfGuiaCP, MailProfGuiaCP, TelefonoProfGuiaCP, CelularProfGuiaCP, ImagenProfGuiaCP', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutProfGuiaCP, NombreProfGuiaCP, CursoProfGuiaCP, ProfesorJefeProfGuiaCP, MailProfGuiaCP, TelefonoProfGuiaCP, CelularProfGuiaCP, CentroPractica_RBD, ImagenProfGuiaCP', 'safe', 'on'=>'search'),
            array('ImagenProfGuiaCP','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar
            array('ImagenProfGuiaCP','file','allowEmpty'=>true,'on'=>'create'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenProfGuiaCP','safe','on'=>'create'),
            array('ImagenProfGuiaCP','safe','on'=>'update'),
            array('RutProfGuiaCP','valrut'),
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
			'MailProfGuiaCP' => 'Mail',
			'TelefonoProfGuiaCP' => 'Teléfono',
			'CelularProfGuiaCP' => 'Celular',
			'CentroPractica_RBD' => 'Centro de Práctica',
			'ImagenProfGuiaCP' => 'Imagen',
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
		$this->addError('RutProfGuiaCP','Rut invalido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreProfGuiaCP)==false)
		$this->addError('NombreProfGuiaCP','Nombre invalido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailProfGuiaCP)==false)
		$this->addError('MailProfGuiaCP','Correo invalido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(telefonovalido($this->TelefonoProfGuiaCP)==false)
		$this->addError('TelefonoProfGuiaCP','Telefono invalido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(celularvalido($this->CelularProfGuiaCP)==false)
		$this->addError('CelularProfGuiaCP','Celular invalido');
	}
}
