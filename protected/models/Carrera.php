<?php
include_once 'FunNumeros.php';

/**
 * This is the model class for table "carrera".
 *
 * The followings are the available columns in table 'carrera':
 * @property string $codCarrera
 * @property string $NombreCarrera
 * @property string $SemestresCarrera
 * @property string $Universidad_NombreInstitucion
 *
 * The followings are the available model relations:
 * @property Universidad $universidadNombreInstitucion
 * @property Secretariacarrera[] $secretariacarreras
 */
class Carrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codCarrera, NombreCarrera, SemestresCarrera, Universidad_CodInstitucion', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
			array('codCarrera, NombreCarrera, SemestresCarrera, Universidad_CodInstitucion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codCarrera, NombreCarrera, SemestresCarrera, Universidad_CodInstitucion', 'safe', 'on'=>'search'),
            array('SemestresCarrera','valnumeros'),
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
			'universidadCodInstitucion' => array(self::BELONGS_TO, 'Universidad', 'Universidad_CodInstitucion'),
			'secretariacarreras' => array(self::HAS_MANY, 'Secretariacarrera', 'Carrera_codCarrera'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codCarrera' => 'Cod Carrera',
			'NombreCarrera' => 'Nombre Carrera',
			'SemestresCarrera' => 'Número de Semestres',
			'Universidad_CodInstitucion' => 'Universidad',
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

		$criteria->compare('codCarrera',$this->codCarrera,true);
		$criteria->compare('NombreCarrera',$this->NombreCarrera,true);
		$criteria->compare('SemestresCarrera',$this->SemestresCarrera,true);
		$criteria->compare('Universidad_NombreInstitucion',$this->Universidad_NombreInstitucion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

		$criteria->compare('codCarrera',$this->codCarrera,true);
		$criteria->compare('NombreCarrera',$this->NombreCarrera,true);
		$criteria->compare('SemestresCarrera',$this->SemestresCarrera,true);
		$criteria->compare('Universidad_CodInstitucion',$this->Universidad_CodInstitucion);

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
	 * @return Carrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
    public function valnumeros($attribute,$params)
	{
		if(numerovalido($this->SemestresCarrera)==false)
		$this->addError('SemestresCarrera','solo se admiten números');
	}
    
	public function getAdmins(){
		
		$queryCoordinador = "select RutCoordinador from docentecoordinadorpracticas where EstadoCoordinador = '1'";
		$queryDirector = "select RutDirector from directorcarrera where EstadoDirector = '1'";
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
            $rows[0] = "denied";
        }
		
		return $rows;
	}
}
