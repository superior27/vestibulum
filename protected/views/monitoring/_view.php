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

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_cost')); ?>:</b>
	<?php echo CHtml::encode($data->seam_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->wash_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->wash_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_cost')); ?>:</b>
	<?php echo CHtml::encode($data->wash_cost); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_quantity_output); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_cost')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::encode($data->request_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cut_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->cut_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cut_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->cut_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cut_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->cut_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cut_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->cut_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cut_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->cut_provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separation_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->separation_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separation_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->separation_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separation_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->separation_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separation_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->separation_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separation_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->separation_provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cut_cost')); ?>:</b>
	<?php echo CHtml::encode($data->cut_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('separation_cost')); ?>:</b>
	<?php echo CHtml::encode($data->separation_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('needlework_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->needlework_provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->seam_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->seam_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seam_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->seam_provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_button_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->apply_button_provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->wash_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->wash_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_type_washing')); ?>:</b>
	<?php echo CHtml::encode($data->wash_type_washing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_differential')); ?>:</b>
	<?php echo CHtml::encode($data->wash_differential); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wash_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->wash_provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expedition_quantity_input')); ?>:</b>
	<?php echo CHtml::encode($data->expedition_quantity_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expedition_quantity_output')); ?>:</b>
	<?php echo CHtml::encode($data->expedition_quantity_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expedition_date_input')); ?>:</b>
	<?php echo CHtml::encode($data->expedition_date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expedition_date_output')); ?>:</b>
	<?php echo CHtml::encode($data->expedition_date_output); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expedition_defects')); ?>:</b>
	<?php echo CHtml::encode($data->expedition_defects); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expedition_provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->expedition_provider_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_36')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_38')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_40')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_42')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_44')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_44); ?>
	<br />

	*/ ?>

</div>