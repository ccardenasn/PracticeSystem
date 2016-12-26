<?php

/**
 * This is the model class for table "documentobitacora".
 *
 * The followings are the available columns in table 'documentobitacora':
 * @property integer $CodDocumentoBitacora
 * @property string $DocumentoWord
 * @property integer $bitacorasesion_id
 *
 * The followings are the available model relations:
 * @property Bitacorasesion $bitacorasesion
 */
class Documentobitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documentobitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bitacorasesion_id', 'required'),
			array('bitacorasesion_id', 'numerical', 'integerOnly'=>true),
			array('DocumentoWord', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodDocumentoBitacora, DocumentoWord, bitacorasesion_id', 'safe', 'on'=>'search'),
			 array('DocumentoWord','file','allowEmpty'=>true,'on'=>'update'),//permite campo vacio si no se carga imagen al actualizar 
			array('DocumentoWord','safe','on'=>'update'),
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
			'bitacorasesion' => array(self::BELONGS_TO, 'Bitacorasesion', 'bitacorasesion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CodDocumentoBitacora' => 'Cod Documento Bitacora',
			'DocumentoWord' => 'Documento Word',
			'bitacorasesion_id' => 'Bitacorasesion',
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

		$criteria->compare('CodDocumentoBitacora',$this->CodDocumentoBitacora);
		$criteria->compare('DocumentoWord',$this->DocumentoWord,true);
		$criteria->compare('bitacorasesion_id',$this->bitacorasesion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documentobitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
