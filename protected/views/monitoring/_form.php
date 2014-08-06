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
<br />
	<div class="row-fluid">
	<div class="span3">
		<?php echo $form->labelEx($model,'request_id'); ?>
		<?php
			echo CHtml::activeDropDownList(
			  $model, 'request_id', 
			  CHtml::listData(Request::model()->findAll(), 'id','description'),
			  array('template'=>'<li>{input} {label}</li>','separator'=>'',)
			);
			?>
		<?php echo $form->error($model,'needlework_cost'); ?>

	</div>
</div>
<br />

	<div class ="alert alert-danger">
			<h2>Etapa da Costura</h2>
		</div>
	<div class="row-fluid">
	<div class="span3">
		<?php echo $form->labelEx($model,'seam_quantity_input'); ?>
		<?php echo $form->textField($model,'seam_quantity_input'); ?>
		<?php echo $form->error($model,'seam_quantity_input'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'seam_quantity_output'); ?>
		<?php echo $form->textField($model,'seam_quantity_output'); ?>
		<?php echo $form->error($model,'seam_quantity_output'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'seam_service_provider'); ?>
		<?php echo $form->textField($model,'seam_service_provider',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seam_service_provider'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'seam_cost'); ?>
		<?php echo $form->textField($model,'seam_cost'); ?>
		<?php echo $form->error($model,'seam_cost'); ?>
	</div>
</div>
<br />

<div class ="alert">
			<h2>Etapa da Lavagem</h2>
		</div>
<div class="row-fluid">
	<div class="span3">
		<?php echo $form->labelEx($model,'wash_quantity_input'); ?>
		<?php echo $form->textField($model,'wash_quantity_input'); ?>
		<?php echo $form->error($model,'wash_quantity_input'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'wash_quantity_output'); ?>
		<?php echo $form->textField($model,'wash_quantity_output'); ?>
		<?php echo $form->error($model,'wash_quantity_output'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'wash_service_provider'); ?>
		<?php echo $form->textField($model,'wash_service_provider',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'wash_service_provider'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'wash_cost'); ?>
		<?php echo $form->textField($model,'wash_cost'); ?>
		<?php echo $form->error($model,'wash_cost'); ?>
	</div>
</div>
<br />

<div class ="alert alert-info">
			<h2>Etapa do Traveto</h2>
		</div>
<div class="row-fluid">
	<div class="span3">
		<?php echo $form->labelEx($model,'apply_button_quantity_input'); ?>
		<?php echo $form->textField($model,'apply_button_quantity_input'); ?>
		<?php echo $form->error($model,'apply_button_quantity_input'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'apply_button_quantity_output'); ?>
		<?php echo $form->textField($model,'apply_button_quantity_output'); ?>
		<?php echo $form->error($model,'apply_button_quantity_output'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'apply_button_service_provider'); ?>
		<?php echo $form->textField($model,'apply_button_service_provider',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'apply_button_service_provider'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'apply_button_cost'); ?>
		<?php echo $form->textField($model,'apply_button_cost'); ?>
		<?php echo $form->error($model,'apply_button_cost'); ?>
	</div>
</div>
<br />

<div class ="alert alert-success">
			<h2>Etapa do Bordado</h2>
		</div>
<div class="row-fluid">
	<div class="span3">
		<?php echo $form->labelEx($model,'needlework_quantity_input'); ?>
		<?php echo $form->textField($model,'needlework_quantity_input'); ?>
		<?php echo $form->error($model,'needlework_quantity_input'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'needlework_quantity_output'); ?>
		<?php echo $form->textField($model,'needlework_quantity_output'); ?>
		<?php echo $form->error($model,'needlework_quantity_output'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'needlework_service_provider'); ?>
		<?php echo $form->textField($model,'needlework_service_provider',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'needlework_service_provider'); ?>
	</div>

	<div class="span3">
		<?php echo $form->labelEx($model,'needlework_cost'); ?>
		<?php echo $form->textField($model,'needlework_cost'); ?>
		<?php echo $form->error($model,'needlework_cost'); ?>
	</div>
</div>

<br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->