<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seam_quantity_input'); ?>
		<?php echo $form->textField($model,'seam_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seam_quantity_output'); ?>
		<?php echo $form->textField($model,'seam_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seam_cost'); ?>
		<?php echo $form->textField($model,'seam_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_quantity_input'); ?>
		<?php echo $form->textField($model,'wash_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_quantity_output'); ?>
		<?php echo $form->textField($model,'wash_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_cost'); ?>
		<?php echo $form->textField($model,'wash_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_button_quantity_input'); ?>
		<?php echo $form->textField($model,'apply_button_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_button_quantity_output'); ?>
		<?php echo $form->textField($model,'apply_button_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_button_cost'); ?>
		<?php echo $form->textField($model,'apply_button_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_quantity_input'); ?>
		<?php echo $form->textField($model,'needlework_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_quantity_output'); ?>
		<?php echo $form->textField($model,'needlework_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_cost'); ?>
		<?php echo $form->textField($model,'needlework_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_id'); ?>
		<?php echo $form->textField($model,'request_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cut_quantity_input'); ?>
		<?php echo $form->textField($model,'cut_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cut_quantity_output'); ?>
		<?php echo $form->textField($model,'cut_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cut_date_input'); ?>
		<?php echo $form->textField($model,'cut_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cut_date_output'); ?>
		<?php echo $form->textField($model,'cut_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cut_provider_id'); ?>
		<?php echo $form->textField($model,'cut_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separation_quantity_input'); ?>
		<?php echo $form->textField($model,'separation_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separation_quantity_output'); ?>
		<?php echo $form->textField($model,'separation_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separation_date_input'); ?>
		<?php echo $form->textField($model,'separation_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separation_date_output'); ?>
		<?php echo $form->textField($model,'separation_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separation_provider_id'); ?>
		<?php echo $form->textField($model,'separation_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cut_cost'); ?>
		<?php echo $form->textField($model,'cut_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'separation_cost'); ?>
		<?php echo $form->textField($model,'separation_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_date_input'); ?>
		<?php echo $form->textField($model,'needlework_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_date_output'); ?>
		<?php echo $form->textField($model,'needlework_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_provider_id'); ?>
		<?php echo $form->textField($model,'needlework_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seam_date_input'); ?>
		<?php echo $form->textField($model,'seam_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seam_date_output'); ?>
		<?php echo $form->textField($model,'seam_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seam_provider_id'); ?>
		<?php echo $form->textField($model,'seam_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_button_date_input'); ?>
		<?php echo $form->textField($model,'apply_button_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_button_date_output'); ?>
		<?php echo $form->textField($model,'apply_button_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_button_provider_id'); ?>
		<?php echo $form->textField($model,'apply_button_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_date_input'); ?>
		<?php echo $form->textField($model,'wash_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_date_output'); ?>
		<?php echo $form->textField($model,'wash_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_type_washing'); ?>
		<?php echo $form->textField($model,'wash_type_washing',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_differential'); ?>
		<?php echo $form->textField($model,'wash_differential',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wash_provider_id'); ?>
		<?php echo $form->textField($model,'wash_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expedition_quantity_input'); ?>
		<?php echo $form->textField($model,'expedition_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expedition_quantity_output'); ?>
		<?php echo $form->textField($model,'expedition_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expedition_date_input'); ?>
		<?php echo $form->textField($model,'expedition_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expedition_date_output'); ?>
		<?php echo $form->textField($model,'expedition_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expedition_defects'); ?>
		<?php echo $form->textField($model,'expedition_defects'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expedition_provider_id'); ?>
		<?php echo $form->textField($model,'expedition_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'production_order'); ?>
		<?php echo $form->textField($model,'production_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'record_number'); ?>
		<?php echo $form->textField($model,'record_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_36'); ?>
		<?php echo $form->textField($model,'quantity_36'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_38'); ?>
		<?php echo $form->textField($model,'quantity_38'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_40'); ?>
		<?php echo $form->textField($model,'quantity_40'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_42'); ?>
		<?php echo $form->textField($model,'quantity_42'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_44'); ?>
		<?php echo $form->textField($model,'quantity_44'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->