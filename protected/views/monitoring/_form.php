<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monitoring-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'seam_quantity_input'); ?>
		<?php echo $form->textField($model,'seam_quantity_input'); ?>
		<?php echo $form->error($model,'seam_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seam_quantity_output'); ?>
		<?php echo $form->textField($model,'seam_quantity_output'); ?>
		<?php echo $form->error($model,'seam_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seam_cost'); ?>
		<?php echo $form->textField($model,'seam_cost'); ?>
		<?php echo $form->error($model,'seam_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_quantity_input'); ?>
		<?php echo $form->textField($model,'wash_quantity_input'); ?>
		<?php echo $form->error($model,'wash_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_quantity_output'); ?>
		<?php echo $form->textField($model,'wash_quantity_output'); ?>
		<?php echo $form->error($model,'wash_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_cost'); ?>
		<?php echo $form->textField($model,'wash_cost'); ?>
		<?php echo $form->error($model,'wash_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_button_quantity_input'); ?>
		<?php echo $form->textField($model,'apply_button_quantity_input'); ?>
		<?php echo $form->error($model,'apply_button_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_button_quantity_output'); ?>
		<?php echo $form->textField($model,'apply_button_quantity_output'); ?>
		<?php echo $form->error($model,'apply_button_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_button_cost'); ?>
		<?php echo $form->textField($model,'apply_button_cost'); ?>
		<?php echo $form->error($model,'apply_button_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'needlework_quantity_input'); ?>
		<?php echo $form->textField($model,'needlework_quantity_input'); ?>
		<?php echo $form->error($model,'needlework_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'needlework_quantity_output'); ?>
		<?php echo $form->textField($model,'needlework_quantity_output'); ?>
		<?php echo $form->error($model,'needlework_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'needlework_cost'); ?>
		<?php echo $form->textField($model,'needlework_cost'); ?>
		<?php echo $form->error($model,'needlework_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_id'); ?>
		<?php echo $form->textField($model,'request_id'); ?>
		<?php echo $form->error($model,'request_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_quantity_input'); ?>
		<?php echo $form->textField($model,'cut_quantity_input'); ?>
		<?php echo $form->error($model,'cut_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_quantity_output'); ?>
		<?php echo $form->textField($model,'cut_quantity_output'); ?>
		<?php echo $form->error($model,'cut_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_date_input'); ?>
		<?php echo $form->textField($model,'cut_date_input'); ?>
		<?php echo $form->error($model,'cut_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_date_output'); ?>
		<?php echo $form->textField($model,'cut_date_output'); ?>
		<?php echo $form->error($model,'cut_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_provider_id'); ?>
		<?php echo $form->textField($model,'cut_provider_id'); ?>
		<?php echo $form->error($model,'cut_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separation_quantity_input'); ?>
		<?php echo $form->textField($model,'separation_quantity_input'); ?>
		<?php echo $form->error($model,'separation_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separation_quantity_output'); ?>
		<?php echo $form->textField($model,'separation_quantity_output'); ?>
		<?php echo $form->error($model,'separation_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separation_date_input'); ?>
		<?php echo $form->textField($model,'separation_date_input'); ?>
		<?php echo $form->error($model,'separation_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separation_date_output'); ?>
		<?php echo $form->textField($model,'separation_date_output'); ?>
		<?php echo $form->error($model,'separation_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separation_provider_id'); ?>
		<?php echo $form->textField($model,'separation_provider_id'); ?>
		<?php echo $form->error($model,'separation_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cut_cost'); ?>
		<?php echo $form->textField($model,'cut_cost'); ?>
		<?php echo $form->error($model,'cut_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'separation_cost'); ?>
		<?php echo $form->textField($model,'separation_cost'); ?>
		<?php echo $form->error($model,'separation_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'needlework_date_input'); ?>
		<?php echo $form->textField($model,'needlework_date_input'); ?>
		<?php echo $form->error($model,'needlework_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'needlework_date_output'); ?>
		<?php echo $form->textField($model,'needlework_date_output'); ?>
		<?php echo $form->error($model,'needlework_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'needlework_provider_id'); ?>
		<?php echo $form->textField($model,'needlework_provider_id'); ?>
		<?php echo $form->error($model,'needlework_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seam_date_input'); ?>
		<?php echo $form->textField($model,'seam_date_input'); ?>
		<?php echo $form->error($model,'seam_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seam_date_output'); ?>
		<?php echo $form->textField($model,'seam_date_output'); ?>
		<?php echo $form->error($model,'seam_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seam_provider_id'); ?>
		<?php echo $form->textField($model,'seam_provider_id'); ?>
		<?php echo $form->error($model,'seam_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_button_date_input'); ?>
		<?php echo $form->textField($model,'apply_button_date_input'); ?>
		<?php echo $form->error($model,'apply_button_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_button_date_output'); ?>
		<?php echo $form->textField($model,'apply_button_date_output'); ?>
		<?php echo $form->error($model,'apply_button_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_button_provider_id'); ?>
		<?php echo $form->textField($model,'apply_button_provider_id'); ?>
		<?php echo $form->error($model,'apply_button_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_date_input'); ?>
		<?php echo $form->textField($model,'wash_date_input'); ?>
		<?php echo $form->error($model,'wash_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_date_output'); ?>
		<?php echo $form->textField($model,'wash_date_output'); ?>
		<?php echo $form->error($model,'wash_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_type_washing'); ?>
		<?php echo $form->textField($model,'wash_type_washing',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'wash_type_washing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_differential'); ?>
		<?php echo $form->textField($model,'wash_differential',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'wash_differential'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wash_provider_id'); ?>
		<?php echo $form->textField($model,'wash_provider_id'); ?>
		<?php echo $form->error($model,'wash_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expedition_quantity_input'); ?>
		<?php echo $form->textField($model,'expedition_quantity_input'); ?>
		<?php echo $form->error($model,'expedition_quantity_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expedition_quantity_output'); ?>
		<?php echo $form->textField($model,'expedition_quantity_output'); ?>
		<?php echo $form->error($model,'expedition_quantity_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expedition_date_input'); ?>
		<?php echo $form->textField($model,'expedition_date_input'); ?>
		<?php echo $form->error($model,'expedition_date_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expedition_date_output'); ?>
		<?php echo $form->textField($model,'expedition_date_output'); ?>
		<?php echo $form->error($model,'expedition_date_output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expedition_defects'); ?>
		<?php echo $form->textField($model,'expedition_defects'); ?>
		<?php echo $form->error($model,'expedition_defects'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expedition_provider_id'); ?>
		<?php echo $form->textField($model,'expedition_provider_id'); ?>
		<?php echo $form->error($model,'expedition_provider_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'production_order'); ?>
		<?php echo $form->textField($model,'production_order'); ?>
		<?php echo $form->error($model,'production_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'record_number'); ?>
		<?php echo $form->textField($model,'record_number'); ?>
		<?php echo $form->error($model,'record_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'reference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_36'); ?>
		<?php echo $form->textField($model,'quantity_36'); ?>
		<?php echo $form->error($model,'quantity_36'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_38'); ?>
		<?php echo $form->textField($model,'quantity_38'); ?>
		<?php echo $form->error($model,'quantity_38'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_40'); ?>
		<?php echo $form->textField($model,'quantity_40'); ?>
		<?php echo $form->error($model,'quantity_40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_42'); ?>
		<?php echo $form->textField($model,'quantity_42'); ?>
		<?php echo $form->error($model,'quantity_42'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_44'); ?>
		<?php echo $form->textField($model,'quantity_44'); ?>
		<?php echo $form->error($model,'quantity_44'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->