<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $CodHorario
 * @property string $Estudiante_RutEstudiante
 * @property string $tablaHorario
 *
 * The followings are the available model relations:
 * @property Estudiante $estudianteRutEstudiante
 */
class Horario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Estudiante_RutEstudiante', 'required'),
			array('Estudiante_RutEstudiante', 'length', 'max'=>45),
			array('tablaHorario', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodHorario, Estudiante_RutEstudiante, tablaHorario', 'safe', 'on'=>'search'),
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
			'estudianteRutEstudiante' => array(self::BELONGS_TO, 'Estudiante', 'Estudiante_RutEstudiante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodHorario' => 'Cod Horario',
			'Estudiante_RutEstudiante' => 'Estudiante Rut Estudiante',
			'tablaHorario' => 'Tabla Horario',
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

		$criteria->compare('CodHorario',$this->CodHorario);
		$criteria->compare('Estudiante_RutEstudiante',$this->Estudiante_RutEstudiante,true);
		$criteria->compare('tablaHorario',$this->tablaHorario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getStudents(){
		
		$queryStudent = "select RutEstudiante from estudiante";
		
		$commandStudent= Yii::app()->db->createCommand($queryStudent);

		$rows = array();
		$dataReaderStudent=$commandStudent->query();
		
		while(($row=$dataReaderStudent->read())!==false){
			array_push($rows, $row['RutEstudiante']);
		}
		
		return $rows;
	}
}
