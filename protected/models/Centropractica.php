<?php
include_once 'FunFecha.php';
include_once 'FunNumeros.php';

/**
 * This is the model class for table "centropractica".
 *
 * The followings are the available columns in table 'centropractica':
 * @property integer $RBD
 * @property string $NombreCentroPractica
 * @property string $VigenciaProtocolo
 * @property string $FechaProtocolo
 * @property string $AnexoProtocolo
 * @property integer $Dependencia_CodDependencia
 * @property integer $NivelEducacional_CodNivel
 * @property string $Area
 * @property integer $Region_codRegion
 * @property integer $Provincia_codProvincia
 * @property integer $Ciudad_codCiudad
 * @property string $Calle
 * @property string $ImagenCentroPractica
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadCodCiudad
 * @property Dependencia $dependenciaCodDependencia
 * @property Niveleducacional $nivelEducacionalCodNivel
 * @property Provincia $provinciaCodProvincia
 * @property Region $regionCodRegion
 * @property Directorcp[] $directorcps
 * @property Estudiante[] $estudiantes
 * @property Jefeutpcp[] $jefeutpcps
 * @property Planificacionclase[] $planificacionclases
 * @property Profesorcoordinadorpracticacp[] $profesorcoordinadorpracticacps
 * @property Profesorguiacp[] $profesorguiacps
 * @property Secretariacp[] $secretariacps
 */
class Centropractica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'centropractica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RBD, Dependencia_CodDependencia, NivelEducacional_CodNivel, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'required','message'=>'Por favor ingrese un valor para {attribute}.'),
            array('RBD','unique','message'=>'El {attribute} {value} ya está registrado.'),
			array('Dependencia_CodDependencia, NivelEducacional_CodNivel, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad', 'numerical', 'integerOnly'=>true,'message'=>'{attribute} debe ser un número.'),
			array('NombreCentroPractica, VigenciaProtocolo, FechaProtocolo, Area, Calle, ImagenCentroPractica', 'length', 'max'=>45),
			array('AnexoProtocolo', 'length', 'max'=>255),
            array('AnexoProtocolo','file','types'=>'pdf','wrongType'=>'Solo se permiten archivos con extensión .pdf','maxSize'=>1048576,'tooLarge'=>'El archivo es demasiado grande, el tamaño máximo permitido es de 1 MB','allowEmpty'=>true,'on'=>'insert,update'),//permite campo vacio si no se carga imagen al actualizar
            array('AnexoProtocolo','safe','on'=>'update'),
            array('ImagenCentroPractica','file','types'=>'png,jpg,jpeg','wrongType'=>'Solo se permiten archivos con las extensiones .jpg, .png y .jpeg','maxSize'=>1048576,'tooLarge'=>'La imagen es demasiado grande, el tamaño máximo permitido es de 1 MB','allowEmpty'=>true,'on'=>'insert,update'),//permite campo vacio si no se carga imagen al actualizar
            array('ImagenCentroPractica','safe','on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RBD, NombreCentroPractica, VigenciaProtocolo, FechaProtocolo, AnexoProtocolo, Dependencia_CodDependencia, NivelEducacional_CodNivel, Area, Region_codRegion, Provincia_codProvincia, Ciudad_codCiudad, Calle, ImagenCentroPractica', 'safe', 'on'=>'search'),
            array('FechaProtocolo','valfecha'),
            array('RBD','valrbd'),
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
			'ciudadCodCiudad' => array(self::BELONGS_TO, 'Ciudad', 'Ciudad_codCiudad'),
			'dependenciaCodDependencia' => array(self::BELONGS_TO, 'Dependencia', 'Dependencia_CodDependencia'),
			'nivelEducacionalCodNivel' => array(self::BELONGS_TO, 'Niveleducacional', 'NivelEducacional_CodNivel'),
			'provinciaCodProvincia' => array(self::BELONGS_TO, 'Provincia', 'Provincia_codProvincia'),
			'regionCodRegion' => array(self::BELONGS_TO, 'Region', 'Region_codRegion'),
			'directorcps' => array(self::HAS_MANY, 'Directorcp', 'CentroPractica_RBD'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'CentroPractica_RBD'),
			'jefeutpcps' => array(self::HAS_MANY, 'Jefeutpcp', 'CentroPractica_RBD'),
			'planificacionclases' => array(self::HAS_MANY, 'Planificacionclase', 'CentroPractica_RBD'),
			'profesorcoordinadorpracticacps' => array(self::HAS_MANY, 'Profesorcoordinadorpracticacp', 'CentroPractica_RBD'),
			'profesorguiacps' => array(self::HAS_MANY, 'Profesorguiacp', 'CentroPractica_RBD'),
			'secretariacps' => array(self::HAS_MANY, 'Secretariacp', 'CentroPractica_RBD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RBD' => 'RBD',
			'NombreCentroPractica' => 'Nombre de Centro',
			'VigenciaProtocolo' => 'Vigencia Protocolo',
			'FechaProtocolo' => 'Fecha Protocolo',
			'AnexoProtocolo' => 'Anexo Protocolo',
			'Dependencia_CodDependencia' => 'Dependencia',
			'NivelEducacional_CodNivel' => 'Nivel Educacional',
			'Area' => 'Área',
			'Region_codRegion' => 'Región',
			'Provincia_codProvincia' => 'Provincia',
			'Ciudad_codCiudad' => 'Ciudad',
			'Calle' => 'Calle',
			'ImagenCentroPractica' => 'Imagen',
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

		$criteria->compare('RBD',$this->RBD);
		$criteria->compare('NombreCentroPractica',$this->NombreCentroPractica,true);
		$criteria->compare('VigenciaProtocolo',$this->VigenciaProtocolo,true);
		$criteria->compare('FechaProtocolo',$this->FechaProtocolo,true);
		$criteria->compare('AnexoProtocolo',$this->AnexoProtocolo,true);
		$criteria->compare('Dependencia_CodDependencia',$this->Dependencia_CodDependencia);
		$criteria->compare('NivelEducacional_CodNivel',$this->NivelEducacional_CodNivel);
		$criteria->compare('Area',$this->Area,true);
		$criteria->compare('Region_codRegion',$this->Region_codRegion);
		$criteria->compare('Provincia_codProvincia',$this->Provincia_codProvincia);
		$criteria->compare('Ciudad_codCiudad',$this->Ciudad_codCiudad);
		$criteria->compare('Calle',$this->Calle,true);
		$criteria->compare('ImagenCentroPractica',$this->ImagenCentroPractica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
        
        $criteria=new CDbCriteria;

		$criteria->compare('RBD',$this->RBD);
		$criteria->compare('NombreCentroPractica',$this->NombreCentroPractica,true);
		$criteria->compare('VigenciaProtocolo',$this->VigenciaProtocolo);
		$criteria->compare('FechaProtocolo',$this->FechaProtocolo,true);
		$criteria->compare('AnexoProtocolo',$this->AnexoProtocolo,true);
		$criteria->compare('Dependencia_CodDependencia',$this->Dependencia_CodDependencia);
		$criteria->compare('NivelEducacional_CodNivel',$this->NivelEducacional_CodNivel);
		$criteria->compare('Area',$this->Area);
		$criteria->compare('Region_codRegion',$this->Region_codRegion);
		$criteria->compare('Provincia_codProvincia',$this->Provincia_codProvincia);
		$criteria->compare('Ciudad_codCiudad',$this->Ciudad_codCiudad);
		$criteria->compare('Calle',$this->Calle,true);
		$criteria->compare('ImagenCentroPractica',$this->ImagenCentroPractica,true);	

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
	 * @return Centropractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function valfecha($attribute,$params)
	{
		if(fechavalida($this->FechaProtocolo)==false)
		$this->addError('FechaProtocolo','fecha no válida');
	}
    
    public function valrbd($attribute,$params)
	{
		if(numerovalido($this->RBD)==false)
		$this->addError('RBD','número no válido');
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
