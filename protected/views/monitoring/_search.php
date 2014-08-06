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
		<?php echo $form->label($model,'seam_service_provider'); ?>
		<?php echo $form->textField($model,'seam_service_provider',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'wash_service_provider'); ?>
		<?php echo $form->textField($model,'wash_service_provider',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'apply_button_service_provider'); ?>
		<?php echo $form->textField($model,'apply_button_service_provider',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'needlework_service_provider'); ?>
		<?php echo $form->textField($model,'needlework_service_provider',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'needlework_cost'); ?>
		<?php echo $form->textField($model,'needlework_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_id'); ?>
		<?php echo $form->textField($model,'request_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->