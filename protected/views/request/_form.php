<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		)); ?>

		<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>
		<br/>
		<?php echo $form->errorSummary($model); ?>
		<div class="row-fluid">
			<?php echo $form->labelEx($model,'description'); ?>
			<?php echo $form->textField($model,'description',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>

		<div class="row-fluid">
			<?php echo $form->labelEx($model,'production_order'); ?>
			<?php echo $form->textField($model,'production_order',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'production_order'); ?>
		</div>

		<div class="row-fluid">
			<?php echo $form->labelEx($model,'record_number'); ?>
			<?php echo $form->textField($model,'record_number',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'record_number'); ?>
		</div>

		<div class="row-fluid">
			<?php echo $form->labelEx($model,'reference'); ?>
			<?php echo $form->textField($model,'reference',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'reference'); ?>
		</div>

		<div class="row-fluid">
			<?php echo $form->labelEx($model,'client_name'); ?>
			<?php echo $form->textField($model,'client_name',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'client_name'); ?>
		</div>

		<div class="row-fluid">
			<?php echo $form->labelEx($model,'client_cnpj'); ?>
			<?php echo $form->textField($model,'client_cnpj',array('size'=>255,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'client_cnpj'); ?>
		</div>

		<div class="row-fluid">
			<?php echo $form->labelEx($model,'date'); ?>
			<?php echo $form->dateField($model,'date'); ?>
			<?php echo $form->error($model,'date'); ?>
		</div>

		<div class="row-fluid">
			<div class="span4">
				<h3>
					Peças
				</h3>

				<?php
				$clothingList = Clothing::model()->findAll();
				echo CHtml::activeCheckBoxList($model, 'clothingIDs', 
					CHtml::listData($clothingList, 
						'id', 
						'name'

						),array(
						'separator'=>'',
						'labelOptions'=>array(
							'style'=> '
							padding-left:13px;
							width: 60px;
							height: 35px;

							'),
						'style'=>'float:left;',

						));
						?>

					</div>

					<div class="span4">
						<h3>
							Quantidade
						</h3>

						<?php

						for($i=0; $i< count ($clothingList);$i++){
	        		//echo $feedstockList[$i]->quantity;

							echo CHtml::textField("quant[$i]",'');
							echo "<br/>";

						}

						?>
					</div>



				</div>
				<br/>

				<div class="row-fluid">
					<?php $this->widget('bootstrap.widgets.TbButton', array(
						'buttonType'=>'submit',
						'type'=>'primary',
						'label'=>'Cadastrar',
						'size'=>'large',
						)); ?>
					</div>
					<?php $this->endWidget(); ?>

</div><!-- form -->