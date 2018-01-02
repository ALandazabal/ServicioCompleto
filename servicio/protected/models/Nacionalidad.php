<?php

/**
 * This is the model class for table "nacionalidad".
 *
 * The followings are the available columns in table 'nacionalidad':
 * @property integer $idNacionalidad
 * @property string $descripcionN
 *
 * The followings are the available model relations:
 * @property Adolescente[] $adolescentes
 * @property Visitante[] $visitantes
 */
class Nacionalidad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nacionalidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nacionalidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idNacionalidad, descripcionN', 'required'),
			array('idNacionalidad', 'numerical', 'integerOnly'=>true),
			array('descripcionN', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idNacionalidad, descripcionN', 'safe', 'on'=>'search'),
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
			'adolescentes' => array(self::HAS_MANY, 'Adolescente', 'fkNac'),
			'visitantes' => array(self::HAS_MANY, 'Visitante', 'fkNac'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idNacionalidad' => 'Id Nacionalidad',
			'descripcionN' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idNacionalidad',$this->idNacionalidad);
		$criteria->compare('descripcionN',$this->descripcionN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}