<?php

/**
 * This is the model class for table "municipio".
 *
 * The followings are the available columns in table 'municipio':
 * @property integer $idMunicipio
 * @property string $descripcionM
 * @property integer $fkEstado
 *
 * The followings are the available model relations:
 * @property Estado $fkEstado0
 * @property Visitante[] $visitantes
 */
class Municipio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Municipio the static model class
	 */
	
	public $descripcionE;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcionM, fkEstado', 'required'),
			array('fkEstado', 'numerical', 'integerOnly'=>true),
			array('descripcionM', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMunicipio, descripcionM, fkEstado, descripcionE', 'safe', 'on'=>'search'),
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
			'fkEstado0' => array(self::BELONGS_TO, 'Estado', 'fkEstado'),
			'visitantes' => array(self::HAS_MANY, 'Visitante', 'fkMunicipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMunicipio' => 'Id Municipio',
			'descripcionM' => 'Municipio',
			'fkEstado' => 'Estado',
			'descripcionE' => 'Estado',
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
		$sort = new CSort;

		$sort->defaultOrder='descripcionM ASC, fkEstado0.descripcionE ASC';
		$sort->attributes=array(
			'descripcionM'=>array(
				'asc'=>'descripcionM ASC,
						fkEstado0.descripcionE ASC',
				'desc'=>'descripcionM DESC,
						fkEstado.descripcionE ASC',
			),
			'descripcionE'=>array(
				'asc'=>'fkEstado0.descripcionE ASC,
						descripcionM ASC',
				'desc'=>'fkEstado0.descripcionE DESC,
						descripcionM ASC',
			),
		);

		$criteria->with = array('fkEstado0');

		$criteria->compare('idMunicipio',$this->idMunicipio);
		$criteria->compare('descripcionM',$this->descripcionM,true);
		$criteria->compare('fkEstado',$this->fkEstado);
		$criteria->compare('fkEstado0.descripcionE',$this->descripcionE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}

	public function getMenuEstado()
	{
		return CHtml::listData(Estado::model()->findAll(),"idEstado","descripcionE");
	}

	public function getEstado($idE)
	{
		return Estado::model()->findByPk($idE); 
		//CHtml::listData(Estado::model()->findAll(),"Id_estado","Descripcion");
	}
}