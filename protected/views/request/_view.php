<?php
/* @var $this RequestController */
/* @var $data Request */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->description), array('view', 'description'=>$data->description)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('production_order')); ?>:</b>
	<?php echo CHtml::encode($data->production_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_number')); ?>:</b>
	<?php echo CHtml::encode($data->record_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_name')); ?>:</b>
	<?php echo CHtml::encode($data->client_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->client_cnpj); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />


</div>