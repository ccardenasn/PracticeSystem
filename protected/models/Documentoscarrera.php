<?php

/**
 * This is the model class for table "documentoscarrera".
 *
 * The followings are the available columns in table 'documentoscarrera':
 * @property string $NombreDocumentoCarrera
 * @property string $ArchivoDocumentoCarrera
 * @property integer $CategoriaDocumentos_CodCategoriaDocumentos
 *
 * The followings are the available model relations:
 * @property Categoriadocumentos $categoriaDocumentosCodCategoriaDocumentos
 */
class Documentoscarrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documentoscarrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NombreDocumentoCarrera, CategoriaDocumentos_CodCategoriaDocumentos', 'required'),
			array('CategoriaDocumentos_CodCategoriaDocumentos', 'numerical', 'integerOnly'=>true),
			array('NombreDocumentoCarrera, ArchivoDocumentoCarrera', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NombreDocumentoCarrera, ArchivoDocumentoCarrera, CategoriaDocumentos_CodCategoriaDocumentos', 'safe', 'on'=>'search'),
			array('ArchivoDocumentoCarrera','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
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
			'categoriaDocumentosCodCategoriaDocumentos' => array(self::BELONGS_TO, 'Categoriadocumentos', 'CategoriaDocumentos_CodCategoriaDocumentos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NombreDocumentoCarrera' => 'Nombre Documento Carrera',
			'ArchivoDocumentoCarrera' => 'Archivo Documento Carrera',
			'CategoriaDocumentos_CodCategoriaDocumentos' => 'Categoria Documentos Cod Categoria Documentos',
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

		$criteria->compare('NombreDocumentoCarrera',$this->NombreDocumentoCarrera,true);
		$criteria->compare('ArchivoDocumentoCarrera',$this->ArchivoDocumentoCarrera,true);
		$criteria->compare('CategoriaDocumentos_CodCategoriaDocumentos',$this->CategoriaDocumentos_CodCategoriaDocumentos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documentoscarrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
