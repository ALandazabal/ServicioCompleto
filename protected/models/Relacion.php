<?php

/**
 * This is the model class for table "relacion".
 *
 * The followings are the available columns in table 'relacion':
 * @property integer $fkRol
 * @property integer $fkVisitante
 * @property integer $fkAdolescente
 *
 * The followings are the available model relations:
 * @property Visita[] $visitas
 * @property Visita[] $visitas1
 */
class Relacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Relacion the static model class
	 */

	public $Role;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'relacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkRol, fkVisitante, fkAdolescente', 'required'),
			array('fkRol, fkVisitante, fkAdolescente', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fkRol, fkVisitante, fkAdolescente, Role', 'safe', 'on'=>'search'),
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
			'visitas' => array(self::HAS_MANY, 'Visita', 'fkRelVte'),
			'visitas1' => array(self::HAS_MANY, 'Visita', 'fkRelAdol'),
			'fkRol0'=> array(self::BELONGS_TO, 'Rol','fkRol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fkRol' => 'Rol',
			'fkVisitante' => 'Visitante',
			'fkAdolescente' => 'Adolescente',
			'Role' => 'Rol',
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

		$criteria->compare('fkRol',$this->fkRol);
		$criteria->compare('fkVisitante',$this->fkVisitante);
		$criteria->compare('fkAdolescente',$this->fkAdolescente);
		$criteria->compare('fkRol0.descripcionR',$this->Role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getMenuRol()
	{
		return CHtml::listData(Rol::model()->findAll(),"idRol","descripcionR");
	}

	public function getMenuVisitante()
	{
		return CHtml::listData(Visitante::model()->findAll(),"idVisitante","idVisitante");
	}

	public function getMenuAdolescente()
	{
		return CHtml::listData(Adolescente::model()->findAll(),"idAdolescente","idAdolescente");
	}
}