<?php

/**
 * This is the model class for table "docentesupervisorpractica".
 *
 * The followings are the available columns in table 'docentesupervisorpractica':
 * @property string $RutSupervisor
 * @property string $NombreSupervisor
 * @property string $ClaveSupervisor
 * @property string $MailSupervisor
 * @property string $TelefonoSupervisor
 * @property string $CelularSupervisor
 * @property string $ImagenSupervisor
 */
class Docentesupervisorpractica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'docentesupervisorpractica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RutSupervisor', 'required'),
			array('RutSupervisor, NombreSupervisor, ClaveSupervisor, MailSupervisor, TelefonoSupervisor, CelularSupervisor, ImagenSupervisor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RutSupervisor, NombreSupervisor, ClaveSupervisor, MailSupervisor, TelefonoSupervisor, CelularSupervisor, ImagenSupervisor', 'safe', 'on'=>'search'),
            array('ImagenSupervisor','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('ImagenSupervisor','safe','on'=>'update'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RutSupervisor' => 'Rut',
			'NombreSupervisor' => 'Nombre',
			'ClaveSupervisor' => 'Clave',
			'MailSupervisor' => 'Mail',
			'TelefonoSupervisor' => 'Telefono',
			'CelularSupervisor' => 'Celular',
			'ImagenSupervisor' => 'Imagen',
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

		$criteria->compare('RutSupervisor',$this->RutSupervisor,true);
		$criteria->compare('NombreSupervisor',$this->NombreSupervisor,true);
		$criteria->compare('ClaveSupervisor',$this->ClaveSupervisor,true);
		$criteria->compare('MailSupervisor',$this->MailSupervisor,true);
		$criteria->compare('TelefonoSupervisor',$this->TelefonoSupervisor,true);
		$criteria->compare('CelularSupervisor',$this->CelularSupervisor,true);
		$criteria->compare('ImagenSupervisor',$this->ImagenSupervisor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Docentesupervisorpractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
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
