<?php
/* @var $this FeedstockController */
/* @var $model Feedstock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feedstock-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">

<?php
		echo CHtml::activeDropDownList(
		  $model, 'provider_id', 
		  CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
		  array('template'=>'<li>{input} {label}</li>','separator'=>'',)
		);
		?>
<!--
		<?php echo $form->labelEx($model,'provider_id'); ?>
		<?php echo $form->textField($model,'provider_id'); ?>
		<?php echo $form->error($model,'provider_id'); ?> -->
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'info',
            'label'=>'Cadastrar',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->