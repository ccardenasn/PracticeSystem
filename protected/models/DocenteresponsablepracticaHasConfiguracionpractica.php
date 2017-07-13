<?php

/**
 * This is the model class for table "docenteresponsablepractica_has_configuracionpractica".
 *
 * The followings are the available columns in table 'docenteresponsablepractica_has_configuracionpractica':
 * @property string $DocenteResponsablePractica_RutResponsable
 * @property integer $ConfiguracionPractica_CodPractica
 */
class DocenteresponsablepracticaHasConfiguracionpractica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'docenteresponsablepractica_has_configuracionpractica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DocenteResponsablePractica_RutResponsable, ConfiguracionPractica_CodPractica', 'required'),
			array('ConfiguracionPractica_CodPractica', 'numerical', 'integerOnly'=>true),
			array('DocenteResponsablePractica_RutResponsable', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DocenteResponsablePractica_RutResponsable, ConfiguracionPractica_CodPractica', 'safe', 'on'=>'search'),
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
            'docenteResponsablePracticaRutResponsable' => array(self::BELONGS_TO, 'Docenteresponsablepractica', 'DocenteResponsablePractica_RutResponsable'),
            'configuracionpracticas' => array(self::BELONGS_TO, 'Configuracionpractica', 'ConfiguracionPractica_CodPractica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DocenteResponsablePractica_RutResponsable' => 'Docente Responsable Practica Rut Responsable',
			'ConfiguracionPractica_CodPractica' => 'Configuracion Practica Cod Practica',
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

		$criteria->compare('DocenteResponsablePractica_RutResponsable',$this->DocenteResponsablePractica_RutResponsable,true);
		$criteria->compare('ConfiguracionPractica_CodPractica',$this->ConfiguracionPractica_CodPractica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DocenteresponsablepracticaHasConfiguracionpractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
