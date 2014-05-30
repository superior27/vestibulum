<?php

/**
 * This is the model class for table "clothing_has_feedstock".
 *
 * The followings are the available columns in table 'clothing_has_feedstock':
 * @property integer $clothing_id
 * @property integer $feedstock_id
 * @property double $clothing_has_feedstock_quantity
 */
class ClothingHasFeedstock extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clothing_has_feedstock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clothing_id, feedstock_id, clothing_has_feedstock_quantity', 'required'),
			array('clothing_id, feedstock_id', 'numerical', 'integerOnly'=>true),
			array('clothing_has_feedstock_quantity', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('clothing_id, feedstock_id, clothing_has_feedstock_quantity', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'clothing_id' => 'Clothing',
			'feedstock_id' => 'Feedstock',
			'clothing_has_feedstock_quantity' => 'Clothing Has Feedstock Quantity',
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

		$criteria->compare('clothing_id',$this->clothing_id);
		$criteria->compare('feedstock_id',$this->feedstock_id);
		$criteria->compare('clothing_has_feedstock_quantity',$this->clothing_has_feedstock_quantity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClothingHasFeedstock the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
