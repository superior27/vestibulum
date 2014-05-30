<?php

/**
 * This is the model class for table "feedstock".
 *
 * The followings are the available columns in table 'feedstock':
 * @property integer $id
 * @property string $name
 * @property double $price
 * @property double $quantity
 * @property string $description
 * @property integer $provider_id
 *
 * The followings are the available model relations:
 * @property Clothing[] $clothings
 * @property Provider $provider
 */
class Feedstock extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $providerName;

	public function afterFind(){
		if(!empty($this->provider)){
			
				$this->providerName=$this->provider->name;
				
				//$this->feedstockQuantity[]=$feedstock->
			

		}

	}

	public function tableName()
	{
		return 'feedstock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, price, quantity, provider_id', 'required'),
			array('provider_id', 'numerical', 'integerOnly'=>true),
			array('price, quantity', 'numerical'),
			array('name, description', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, price, quantity, description, provider_id', 'safe', 'on'=>'search'),
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
			'clothings' => array(self::MANY_MANY, 'Clothing', 'clothing_has_feedstock(feedstock_id, clothing_id)'),
			'provider' => array(self::BELONGS_TO, 'Provider', 'provider_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nome',
			'price' => 'Preço',
			'quantity' => 'Quantidade',
			'description' => 'Descrição',
			'provider_id' => 'Fornecedor',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('provider_id',$this->provider_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Feedstock the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
