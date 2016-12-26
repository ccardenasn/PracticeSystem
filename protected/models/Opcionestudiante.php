<?php
/**
 * The followings are the available columns in table 'tbl_comment':
 * @property integer $id
 * @property string $content
 * @property integer $status
 * @property integer $create_time
 * @property string $author
 * @property string $email
 * @property string $url
 * @property integer $post_id
 */
class Opcionestudiante extends CActiveRecord
{
    public $file;
    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(  
             array('file', 'file', 
                   'types'=>'csv',
                   'maxSize'=>1024 * 1024 * 10, // 10MB
                   'tooLarge'=>'The file was larger than 10MB. Please upload a smaller file.',
                   'allowEmpty' => false
                  ),
        );
    }
 
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'file' => 'Select file',
        );
    }
 
}