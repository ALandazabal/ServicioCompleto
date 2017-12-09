<?php

/**
 * This is the model class for table "adolescente".
 *
 * The followings are the available columns in table 'adolescente':
 * @property integer $idAdolescente
 * @property string $nombreA
 * @property string $apellidoA
 * @property integer $fkNac
 *
 * The followings are the available model relations:
 * @property Nacionalidad $fkNac0
 * @property Visitante[] $visitantes
 */
class Adolescente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Adolescente the static model class
	 */
	
	public $Nationality;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'adolescente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idAdolescente, nombreA, apellidoA, fkNac', 'required'),
			array('idAdolescente, fkNac', 'numerical', 'integerOnly'=>true),
			array('nombreA, apellidoA', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idAdolescente, nombreA, apellidoA, fkNac, Nationality', 'safe', 'on'=>'search'),
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
			'fkNac0' => array(self::BELONGS_TO, 'Nacionalidad', 'fkNac'),
			'visitantes' => array(self::MANY_MANY, 'Visitante', 'relacion(fkAdolescente, fkVisitante)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAdolescente' => 'Cedula',
			'nombreA' => 'Nombre',
			'apellidoA' => 'Apellido',
			'fkNac' => 'Nacionalidad',
			'Nationality' => 'Nacionalidad',
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
		$sort=new CSort;

		$sort->defaultOrder='idAdolescente ASC, fkNac0.descripcionN ASC';
		$sort->attributes=array(
			'idAdolescente'=>array(
				'asc'=>'idAdolescente ASC,
						fkNac0.descripcionN ASC',
				'desc'=>'idAdolescente DESC,
						fkNac0.descripcionN ASC',
			),
			'Nationality'=>array(
				'asc'=>'fkNac0.descripcionN ASC,
						idAdolescente ASC',
				'desc'=>'fkNac0.descripcionN DESC,
						idAdolescente ASC',
			),
		);

		$criteria->with = array('fkNac0');

		$criteria->compare('idAdolescente',$this->idAdolescente);
		$criteria->compare('nombreA',$this->nombreA,true);
		$criteria->compare('apellidoA',$this->apellidoA,true);
		$criteria->compare('fkNac',$this->fkNac);
		$criteria->compare('fkNac0.descripcionN',$this->Nationality,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}

	public function getMenuNac()
	{
		return CHtml::listData(Nacionalidad::model()->findAll(),"idNacionalidad","descripcionN");
	}
}