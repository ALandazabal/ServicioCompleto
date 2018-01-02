<?php

/**
 * This is the model class for table "visita".
 *
 * The followings are the available columns in table 'visita':
 * @property string $fecha
 * @property string $h_entrada
 * @property string $h_salida
 * @property integer $fkUsuario
 * @property integer $fkRelVte
 * @property integer $fkRelAdol
 *
 * The followings are the available model relations:
 * @property Relacion $fkRelVte0
 * @property Relacion $fkRelAdol0
 * @property Usuario $fkUsuario0
 */
class Visita extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Visita the static model class
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
		return 'visita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, h_entrada, fkUsuario, fkRelVte, fkRelAdol', 'required'),
			array('fkUsuario, fkRelVte, fkRelAdol', 'numerical', 'integerOnly'=>true),
			//array('h_entrada, h_salida', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fecha, h_entrada, h_salida, fkUsuario, fkRelVte, fkRelAdol', 'safe', 'on'=>'search'),
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
			'fkRelVte0' => array(self::BELONGS_TO, 'Relacion', 'fkRelVte'),
			'fkRelAdol0' => array(self::BELONGS_TO, 'Relacion', 'fkRelAdol'),
			'fkUsuario0' => array(self::BELONGS_TO, 'Usuario', 'fkUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha' => 'Fecha',
			'h_entrada' => 'Hora Entrada',
			'h_salida' => 'Hora Salida',
			'fkUsuario' => 'Usuario',
			'fkRelVte' => 'Visitante',
			'fkRelAdol' => 'Adolescente',
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

		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('h_entrada',$this->h_entrada,true);
		$criteria->compare('h_salida',$this->h_salida,true);
		$criteria->compare('fkUsuario',$this->fkUsuario);
		$criteria->compare('fkRelVte',$this->fkRelVte);
		$criteria->compare('fkRelAdol',$this->fkRelAdol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getMenuUsuario()
	{
		return CHtml::listData(Usuario::model()->findAll(),"idUsuario","idUsuario");
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