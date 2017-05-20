<?php
include_once 'FunRut.php';
include_once 'FunNombre.php';
include_once 'FunCorreo.php';
include_once 'FunTelefono.php';
include_once 'FunCelular.php';
include_once 'FunNumeros.php';
/**
 * This is the model class for table "docenteresponsablepractica".
 *
 * The followings are the available columns in table 'docenteresponsablepractica':
 * @property string $RutResponsable
 * @property string $NombreResponsable
 * @property string $ClaveResponsable
 * @property string $MailResponsable
 * @property string $TelefonoResponsable
 * @property string $CelularResponsable
 * @property string $ImagenResponsable
 *
 * The followings are the available model relations:
 * @property Configuracionpractica[] $configuracionpracticas
 */
class Perfildocenteresponsablepractica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'docenteresponsablepractica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutResponsable', 'required'),
			array('RutResponsable, NombreResponsable, ClaveResponsable, MailResponsable, TelefonoResponsable, CelularResponsable, ImagenResponsable', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutResponsable, NombreResponsable, ClaveResponsable, MailResponsable, TelefonoResponsable, CelularResponsable, ImagenResponsable', 'safe', 'on'=>'search'),
            array('ImagenResponsable','safe','on'=>'update'),
            array('RutResponsable','valrut'),
            array('NombreResponsable','valnombre'),
            array('MailResponsable','valcorreo'),
            array('TelefonoResponsable','valtelefono'),
            array('CelularResponsable','valcelular'),
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
			'configuracionpracticas' => array(self::HAS_MANY, 'Configuracionpractica', 'DocenteResponsablePractica_RutResponsable'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutResponsable' => 'Rut',
			'NombreResponsable' => 'Nombre',
			'ClaveResponsable' => 'Clave',
			'MailResponsable' => 'Correo',
			'TelefonoResponsable' => 'Teléfono',
			'CelularResponsable' => 'Celular',
			'ImagenResponsable' => 'Imagen',
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

		$criteria->compare('RutResponsable',$this->RutResponsable,true);
		$criteria->compare('NombreResponsable',$this->NombreResponsable,true);
		$criteria->compare('ClaveResponsable',$this->ClaveResponsable,true);
		$criteria->compare('MailResponsable',$this->MailResponsable,true);
		$criteria->compare('TelefonoResponsable',$this->TelefonoResponsable,true);
		$criteria->compare('CelularResponsable',$this->CelularResponsable,true);
		$criteria->compare('ImagenResponsable',$this->ImagenResponsable,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perfildocenteresponsablepractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valrut($attribute,$params)
	{
		if(rutvalido($this->RutResponsable)==false)
		$this->addError('RutResponsable','Rut no válido');
	}
    
    public function valnombre($attribute,$params)
	{
		if(nombrevalido($this->NombreResponsable)==false)
		$this->addError('NombreResponsable','Nombre no válido');
	}
    
    public function valcorreo($attribute,$params)
	{
		if(correovalido($this->MailResponsable)==false)
		$this->addError('MailResponsable','Correo no válido');
	}
    
    public function valtelefono($attribute,$params)
	{
		if(numerovalido($this->TelefonoResponsable)==false)
		$this->addError('TelefonoResponsable','Telefono no válido');
	}
    
    public function valcelular($attribute,$params)
	{
		if(numerovalido($this->CelularResponsable)==false)
		$this->addError('CelularResponsable','Celular no válido');
	}
    
    public function getAdmins(){
		
		$queryResponsable = "select RutResponsable from docenteresponsablepractica";
		
		$commandResponsable= Yii::app()->db->createCommand($queryResponsable);
		
		$rows = array();
		
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
