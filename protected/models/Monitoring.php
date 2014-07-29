<?php

/**
 * This is the model class for table "monitoring".
 *
 * The followings are the available columns in table 'monitoring':
 * @property integer $id
 * @property integer $seam_quantity_input
 * @property integer $seam_quantity_output
 * @property string $seam_service_provider
 * @property double $seam_cost
 * @property integer $wash_quantity_input
 * @property integer $wash_quantity_output
 * @property string $wash_service_provider
 * @property double $wash_cost
 * @property integer $apply_button_quantity_input
 * @property integer $apply_button_quantity_output
 * @property string $apply_button_service_provider
 * @property double $apply_button_cost
 * @property integer $needlework_quantity_input
 * @property integer $needlework_quantity_output
 * @property string $needlework_service_provider
 * @property double $needlework_cost
 * @property integer $request_id
 *
 * The followings are the available model relations:
 * @property Request $request
 */
class Monitoring extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'monitoring';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('seam_quantity_input, seam_quantity_output, seam_service_provider, seam_cost, wash_quantity_input, wash_quantity_output, wash_service_provider, wash_cost, apply_button_quantity_input, apply_button_quantity_output, apply_button_service_provider, apply_button_cost, needlework_quantity_input, needlework_quantity_output, needlework_service_provider, needlework_cost, request_id', 'required'),
			array('seam_quantity_input, seam_quantity_output, wash_quantity_input, wash_quantity_output, apply_button_quantity_input, apply_button_quantity_output, needlework_quantity_input, needlework_quantity_output, request_id', 'numerical', 'integerOnly'=>true),
			array('seam_cost, wash_cost, apply_button_cost, needlework_cost', 'numerical'),
			array('seam_service_provider, wash_service_provider, apply_button_service_provider, needlework_service_provider', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, seam_quantity_input, seam_quantity_output, seam_service_provider, seam_cost, wash_quantity_input, wash_quantity_output, wash_service_provider, wash_cost, apply_button_quantity_input, apply_button_quantity_output, apply_button_service_provider, apply_button_cost, needlework_quantity_input, needlework_quantity_output, needlework_service_provider, needlework_cost, request_id', 'safe', 'on'=>'search'),
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
			'request' => array(self::BELONGS_TO, 'Request', 'request_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'seam_quantity_input' => 'Seam Quantity Input',
			'seam_quantity_output' => 'Seam Quantity Output',
			'seam_service_provider' => 'Seam Service Provider',
			'seam_cost' => 'Seam Cost',
			'wash_quantity_input' => 'Wash Quantity Input',
			'wash_quantity_output' => 'Wash Quantity Output',
			'wash_service_provider' => 'Wash Service Provider',
			'wash_cost' => 'Wash Cost',
			'apply_button_quantity_input' => 'Apply Button Quantity Input',
			'apply_button_quantity_output' => 'Apply Button Quantity Output',
			'apply_button_service_provider' => 'Apply Button Service Provider',
			'apply_button_cost' => 'Apply Button Cost',
			'needlework_quantity_input' => 'Needlework Quantity Input',
			'needlework_quantity_output' => 'Needlework Quantity Output',
			'needlework_service_provider' => 'Needlework Service Provider',
			'needlework_cost' => 'Needlework Cost',
			'request_id' => 'Request',
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
		$criteria->compare('seam_quantity_input',$this->seam_quantity_input);
		$criteria->compare('seam_quantity_output',$this->seam_quantity_output);
		$criteria->compare('seam_service_provider',$this->seam_service_provider,true);
		$criteria->compare('seam_cost',$this->seam_cost);
		$criteria->compare('wash_quantity_input',$this->wash_quantity_input);
		$criteria->compare('wash_quantity_output',$this->wash_quantity_output);
		$criteria->compare('wash_service_provider',$this->wash_service_provider,true);
		$criteria->compare('wash_cost',$this->wash_cost);
		$criteria->compare('apply_button_quantity_input',$this->apply_button_quantity_input);
		$criteria->compare('apply_button_quantity_output',$this->apply_button_quantity_output);
		$criteria->compare('apply_button_service_provider',$this->apply_button_service_provider,true);
		$criteria->compare('apply_button_cost',$this->apply_button_cost);
		$criteria->compare('needlework_quantity_input',$this->needlework_quantity_input);
		$criteria->compare('needlework_quantity_output',$this->needlework_quantity_output);
		$criteria->compare('needlework_service_provider',$this->needlework_service_provider,true);
		$criteria->compare('needlework_cost',$this->needlework_cost);
		$criteria->compare('request_id',$this->request_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Monitoring the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
