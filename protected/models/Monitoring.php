<?php

/**
 * This is the model class for table "monitoring".
 *
 * The followings are the available columns in table 'monitoring':
 * @property integer $id
 * @property integer $seam_quantity_input
 * @property integer $seam_quantity_output
 * @property double $seam_cost
 * @property integer $wash_quantity_input
 * @property integer $wash_quantity_output
 * @property double $wash_cost
 * @property integer $apply_button_quantity_input
 * @property integer $apply_button_quantity_output
 * @property double $apply_button_cost
 * @property integer $needlework_quantity_input
 * @property integer $needlework_quantity_output
 * @property double $needlework_cost
 * @property integer $request_id
 * @property integer $cut_quantity_input
 * @property integer $cut_quantity_output
 * @property string $cut_date_input
 * @property string $cut_date_output
 * @property integer $cut_provider_id
 * @property integer $separation_quantity_input
 * @property integer $separation_quantity_output
 * @property string $separation_date_input
 * @property string $separation_date_output
 * @property integer $separation_provider_id
 * @property double $cut_cost
 * @property double $separation_cost
 * @property string $needlework_date_input
 * @property string $needlework_date_output
 * @property integer $needlework_provider_id
 * @property string $seam_date_input
 * @property string $seam_date_output
 * @property integer $seam_provider_id
 * @property string $apply_button_date_input
 * @property string $apply_button_date_output
 * @property integer $apply_button_provider_id
 * @property string $wash_date_input
 * @property string $wash_date_output
 * @property string $wash_type_washing
 * @property string $wash_differential
 * @property integer $wash_provider_id
 * @property integer $expedition_quantity_input
 * @property integer $expedition_quantity_output
 * @property string $expedition_date_input
 * @property string $expedition_date_output
 * @property integer $expedition_defects
 * @property integer $expedition_provider_id
 * @property integer $production_order
 * @property integer $record_number
 * @property string $reference
 * @property integer $quantity_36
 * @property integer $quantity_38
 * @property integer $quantity_40
 * @property integer $quantity_42
 * @property integer $quantity_44
 * @property string $client
 * @property double $expedition_cost
 *
 * The followings are the available model relations:
 * @property Request $request
 * @property Provider $cutProvider
 * @property Provider $separationProvider
 * @property Provider $needleworkProvider
 * @property Provider $seamProvider
 * @property Provider $applyButtonProvider
 * @property Provider $washProvider
 * @property Provider $expeditionProvider
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
			array('seam_quantity_input, seam_quantity_output, seam_cost, wash_quantity_input, wash_quantity_output, wash_cost, apply_button_quantity_input, apply_button_quantity_output, apply_button_cost, needlework_quantity_input, needlework_quantity_output, needlework_cost, request_id', 'required'),
			array('seam_quantity_input, seam_quantity_output, wash_quantity_input, wash_quantity_output, apply_button_quantity_input, apply_button_quantity_output, needlework_quantity_input, needlework_quantity_output, request_id, cut_quantity_input, cut_quantity_output, cut_provider_id, separation_quantity_input, separation_quantity_output, separation_provider_id, needlework_provider_id, seam_provider_id, apply_button_provider_id, wash_provider_id, expedition_quantity_input, expedition_quantity_output, expedition_defects, expedition_provider_id, production_order, record_number, quantity_36, quantity_38, quantity_40, quantity_42, quantity_44', 'numerical', 'integerOnly'=>true),
			array('seam_cost, wash_cost, apply_button_cost, needlework_cost, cut_cost, separation_cost, expedition_cost', 'numerical'),
			array('wash_type_washing, wash_differential, client, client_cnpj', 'length', 'max'=>255),
			array('reference', 'length', 'max'=>45),
			array('cut_date_input, cut_date_output, separation_date_input, separation_date_output, needlework_date_input, needlework_date_output, seam_date_input, seam_date_output, apply_button_date_input, apply_button_date_output, wash_date_input, wash_date_output, expedition_date_input, expedition_date_output', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, seam_quantity_input, seam_quantity_output, seam_cost, wash_quantity_input, wash_quantity_output, wash_cost, apply_button_quantity_input, apply_button_quantity_output, apply_button_cost, needlework_quantity_input, needlework_quantity_output, needlework_cost, request_id, cut_quantity_input, cut_quantity_output, cut_date_input, cut_date_output, cut_provider_id, separation_quantity_input, separation_quantity_output, separation_date_input, separation_date_output, separation_provider_id, cut_cost, separation_cost, needlework_date_input, needlework_date_output, needlework_provider_id, seam_date_input, seam_date_output, seam_provider_id, apply_button_date_input, apply_button_date_output, apply_button_provider_id, wash_date_input, wash_date_output, wash_type_washing, wash_differential, wash_provider_id, expedition_quantity_input, expedition_quantity_output, expedition_date_input, expedition_date_output, expedition_defects, expedition_provider_id, production_order, record_number, reference, quantity_36, quantity_38, quantity_40, quantity_42, quantity_44', 'safe', 'on'=>'search'),
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
			'cutProvider' => array(self::BELONGS_TO, 'Provider', 'cut_provider_id'),
			'separationProvider' => array(self::BELONGS_TO, 'Provider', 'separation_provider_id'),
			'needleworkProvider' => array(self::BELONGS_TO, 'Provider', 'needlework_provider_id'),
			'seamProvider' => array(self::BELONGS_TO, 'Provider', 'seam_provider_id'),
			'applyButtonProvider' => array(self::BELONGS_TO, 'Provider', 'apply_button_provider_id'),
			'washProvider' => array(self::BELONGS_TO, 'Provider', 'wash_provider_id'),
			'expeditionProvider' => array(self::BELONGS_TO, 'Provider', 'expedition_provider_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'seam_quantity_input' => 'Quantidade de Entrada',
			'seam_quantity_output' => 'Quantidade de Saída',
			'seam_cost' => 'Custo Costura',
			'wash_quantity_input' => 'Quantidade de Entrada',
			'wash_quantity_output' => 'Quantidade de Saída',
			'wash_cost' => 'Custo da Lavagem',
			'apply_button_quantity_input' => 'Quantidade de Entrada',
			'apply_button_quantity_output' => 'Quantidade de Saída',
			'apply_button_cost' => 'Custo do Travetto',
			'needlework_quantity_input' => 'Quantidade de Entrada',
			'needlework_quantity_output' => 'Quantidade de Saída',
			'needlework_cost' => 'Custo do Bordado',
			'request_id' => 'Pedido',
			'cut_quantity_input' => 'Quantidade de Entrada',
			'cut_quantity_output' => 'Quantidade de Saída',
			'cut_date_input' => 'Data de Entrada',
			'cut_date_output' => 'Data de Saída',
			'cut_provider_id' => 'Prestador de Serviço do Corte',
			'separation_quantity_input' => 'Quantidade de Entrada',
			'separation_quantity_output' => 'Quantidade de Saída',
			'separation_date_input' => 'Dade de Entrada',
			'separation_date_output' => 'Dade de Saída',
			'separation_provider_id' => 'Prestador de Serviço de Separação',
			'cut_cost' => 'Custo do Corte',
			'separation_cost' => 'Custo da Separação',
			'needlework_date_input' => 'Data de Entrada',
			'needlework_date_output' => 'Data de Saída',
			'needlework_provider_id' => 'Prestador de Serviço de Bordado',
			'seam_date_input' => 'Data de Entrada',
			'seam_date_output' => 'Data de Saída',
			'seam_provider_id' => 'Prestador de Serviço de Cosutra',
			'apply_button_date_input' => 'Data de Entrada',
			'apply_button_date_output' => 'Data de Saída',
			'apply_button_provider_id' => 'Prestador de Serviço de Travetto',
			'wash_date_input' => 'Data de Entrada',
			'wash_date_output' => 'Data de Saída',
			'wash_type_washing' => 'Tipo de Lavagem',
			'wash_differential' => 'Diferencial da Lavagem',
			'wash_provider_id' => 'Prestador de Serviço de Lavagem',
			'expedition_quantity_input' => 'Quantidade de Entrada',
			'expedition_quantity_output' => 'Quantidade de Saída',
			'expedition_date_input' => 'Data de Entrada',
			'expedition_date_output' => 'Data de Saída',
			'expedition_defects' => 'Defeitos de Expedição',
			'expedition_provider_id' => 'Prestador de Serviço de Expedição',
			'production_order' => 'Ordem de Produção',
			'record_number' => 'Número de Registro',
			'reference' => 'Referência',
			'quantity_36' => 'Quantidade 36',
			'quantity_38' => 'Quantidade 38',
			'quantity_40' => 'Quantidade 40',
			'quantity_42' => 'Quantidade 42',
			'quantity_44' => 'Quantidade 44',
			'client' => 'Cliente',
			'expedition_cost' => 'Custo de Expedição',
			'client_cnpj' => 'Cliente CNPJ',
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
		$criteria->compare('seam_cost',$this->seam_cost);
		$criteria->compare('wash_quantity_input',$this->wash_quantity_input);
		$criteria->compare('wash_quantity_output',$this->wash_quantity_output);
		$criteria->compare('wash_cost',$this->wash_cost);
		$criteria->compare('apply_button_quantity_input',$this->apply_button_quantity_input);
		$criteria->compare('apply_button_quantity_output',$this->apply_button_quantity_output);
		$criteria->compare('apply_button_cost',$this->apply_button_cost);
		$criteria->compare('needlework_quantity_input',$this->needlework_quantity_input);
		$criteria->compare('needlework_quantity_output',$this->needlework_quantity_output);
		$criteria->compare('needlework_cost',$this->needlework_cost);
		$criteria->compare('request_id',$this->request_id);
		$criteria->compare('cut_quantity_input',$this->cut_quantity_input);
		$criteria->compare('cut_quantity_output',$this->cut_quantity_output);
		$criteria->compare('cut_date_input',$this->cut_date_input,true);
		$criteria->compare('cut_date_output',$this->cut_date_output,true);
		$criteria->compare('cut_provider_id',$this->cut_provider_id);
		$criteria->compare('separation_quantity_input',$this->separation_quantity_input);
		$criteria->compare('separation_quantity_output',$this->separation_quantity_output);
		$criteria->compare('separation_date_input',$this->separation_date_input,true);
		$criteria->compare('separation_date_output',$this->separation_date_output,true);
		$criteria->compare('separation_provider_id',$this->separation_provider_id);
		$criteria->compare('cut_cost',$this->cut_cost);
		$criteria->compare('separation_cost',$this->separation_cost);
		$criteria->compare('needlework_date_input',$this->needlework_date_input,true);
		$criteria->compare('needlework_date_output',$this->needlework_date_output,true);
		$criteria->compare('needlework_provider_id',$this->needlework_provider_id);
		$criteria->compare('seam_date_input',$this->seam_date_input,true);
		$criteria->compare('seam_date_output',$this->seam_date_output,true);
		$criteria->compare('seam_provider_id',$this->seam_provider_id);
		$criteria->compare('apply_button_date_input',$this->apply_button_date_input,true);
		$criteria->compare('apply_button_date_output',$this->apply_button_date_output,true);
		$criteria->compare('apply_button_provider_id',$this->apply_button_provider_id);
		$criteria->compare('wash_date_input',$this->wash_date_input,true);
		$criteria->compare('wash_date_output',$this->wash_date_output,true);
		$criteria->compare('wash_type_washing',$this->wash_type_washing,true);
		$criteria->compare('wash_differential',$this->wash_differential,true);
		$criteria->compare('wash_provider_id',$this->wash_provider_id);
		$criteria->compare('expedition_quantity_input',$this->expedition_quantity_input);
		$criteria->compare('expedition_quantity_output',$this->expedition_quantity_output);
		$criteria->compare('expedition_date_input',$this->expedition_date_input,true);
		$criteria->compare('expedition_date_output',$this->expedition_date_output,true);
		$criteria->compare('expedition_defects',$this->expedition_defects);
		$criteria->compare('expedition_provider_id',$this->expedition_provider_id);
		$criteria->compare('production_order',$this->production_order);
		$criteria->compare('record_number',$this->record_number);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('quantity_36',$this->quantity_36);
		$criteria->compare('quantity_38',$this->quantity_38);
		$criteria->compare('quantity_40',$this->quantity_40);
		$criteria->compare('quantity_42',$this->quantity_42);
		$criteria->compare('quantity_44',$this->quantity_44);
		$criteria->compare('expedition_cost',$this->expedition_cost);
		$criteria->compare('client',$this->client);
		$criteria->compare('client_cnpj',$this->client_cnpj);

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
