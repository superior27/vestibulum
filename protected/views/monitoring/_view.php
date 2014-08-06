<?php
/* @var $this MonitoringController */
/* @var $data Monitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->seam_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->seam_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_service_provider')); ?>:</b>
	<?php echo CHtml::encode($data->seam_service_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_cost')); ?>:</b>
	<?php echo CHtml::encode($data->seam_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->wash_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->wash_quantity_output); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_service_provider')); ?>:</b>
	<?php echo CHtml::encode($data->wash_service_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_cost')); ?>:</b>
	<?php echo CHtml::encode($data->wash_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_service_provider')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_service_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_cost')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_service_provider')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_service_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_cost')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::encode($data->request_id); ?>
	<br />

	*/ ?>

</div>