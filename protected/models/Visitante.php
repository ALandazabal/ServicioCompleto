<?php

/**
 * This is the model class for table "visitante".
 *
 * The followings are the available columns in table 'visitante':
 * @property integer $idVisitante
 * @property string $nombreV
 * @property string $apellidoV
 * @property string $direccion
 * @property integer $fkMunicipio
 * @property integer $fkNac
 *
 * The followings are the available model relations:
 * @property Adolescente[] $adolescentes
 * @property Municipio $fkMunicipio0
 * @property Nacionalidad $fkNac0
 */
class Visitante extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Visitante the static model class
	 */

	public $Nationality, $Municip;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idVisitante, nombreV, apellidoV, direccion, fkEstado, fkMunicipio, fkNac', 'required'),
			array('idVisitante, fkEstado, fkMunicipio, fkNac', 'numerical', 'integerOnly'=>true),
			array('nombreV, apellidoV, direccion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idVisitante, nombreV, apellidoV, direccion, fkEstado, fkMunicipio, fkNac, Nationality, Municip', 'safe', 'on'=>'search'),
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
			'adolescentes' => array(self::MANY_MANY, 'Adolescente', 'relacion(fkVisitante, fkAdolescente)'),
			'fkMunicipio0' => array(self::BELONGS_TO, 'Municipio', 'fkMunicipio'),
			'fkNac0' => array(self::BELONGS_TO, 'Nacionalidad', 'fkNac'),
			'fkEstado0'=>array(self::BELONGS_TO,'Estado', 'fkEstado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVisitante' => 'Cedula',
			'nombreV' => 'Nombre',
			'apellidoV' => 'Apellido',
			'direccion' => 'Direccion',
			'fkEstado' => 'Estado',
			'fkMunicipio' => 'Municipio',
			'fkNac' => 'Nacionalidad',
			'Nationality' => 'Nacionalidad',
			'Municip' => 'Municipio',
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
		/*$sort=new CSort;

		$sort->defaultOrder='idVisitante ASC,
			fkNac0.descripcionN ASC,
			fkMunicipio0.descripcionM ASC';
		$sort->attributes=array(
			'idVisitante')*/

		$criteria->with = array('fkNac0');

		$criteria->compare('idVisitante',$this->idVisitante);
		$criteria->compare('nombreV',$this->nombreV,true);
		$criteria->compare('apellidoV',$this->apellidoV,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('fkEstado',$this->fkEstado);
		$criteria->compare('fkMunicipio',$this->fkMunicipio);
		$criteria->compare('fkNac',$this->fkNac);
		$criteria->compare('fkNac0.descripcionN',$this->Nationality,true);
		$criteria->compare('fkMunicipio0.descripcionM',$this->Municip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			//'sort'=>$sort,
		));
	}

	public function getMenuEstado()
	{
		return CHtml::listData(Estado::model()->findAll(),"idEstado","descripcionE");
	}
	/*public function getMenuMunicipio($defaultEstado=19)
	{
		return CHtml::listData(Municipio::model()->findAll("Fk_estado=?",array($defaultEstado)),"Id_municipio","Descripcion");
	}*/
	public function getMenuMunicipio()
	{
		return CHtml::listData(Municipio::model()->findAll(),"idMunicipio","descripcionM");
	}
	public function getMenuRol()
	{
		return CHtml::listData(Rol::model()->findAll(),"idRol","descripcionR");
	}
	public function getMenuNac()
	{
		return CHtml::listData(Nacionalidad::model()->findAll(),"idNacionalidad","descripcionN");
	}
}