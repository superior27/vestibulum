<?php

/**
 * This is the model class for table "request".
 *
 * The followings are the available columns in table 'request':
 * @property integer $id
 * @property double $price
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Monitoring[] $monitorings
 * @property Clothing[] $clothings
 */
class Request extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $clothingIDs = array();
	public $clothingNames = array();
	public $clothingQuantity = array();
	//public $clothingSize = array();

	public function afterFind(){
		if(!empty($this->clothings)){
			foreach($this->clothings as $clothing){
				$this->clothingIDs[]=$clothing->id;
				$this->clothingNames[]=$clothing->name;
				
				
			}

		}

	}
	 public function behaviors(){ 
          return array( 'CAdvancedArBehavior' => array(
                'class' => 'application.extensions.CAdvancedArBehavior'));
    }


	public function tableName()
	{
		return 'request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price', 'required'),
			array('price', 'numerical'),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, price, description', 'safe', 'on'=>'search'),
			//array('clothingIDs', 'unsafe'),
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
			'monitorings' => array(self::HAS_MANY, 'Monitoring', 'request_id'),
			'clothings' => array(self::MANY_MANY, 'Clothing', 'request_has_clothing(request_id, clothing_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'price' => 'Preço',
			'description'=>"Descrição",
			'production_order'=>'Ordem de Produção',
			'record_number'=>'Número de Registros',
			'reference'=>'Referência',
			'client_name'=>'Nome do Cliente',
			'client_cnpj'=>'CNPJ',
			'date'=>'Data'
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

		$criteria->compare('id',$this->id);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Request the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
