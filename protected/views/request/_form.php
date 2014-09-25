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
	        ));
	        ?>
	   
    </div>
	
	<div class="span4">
		<h3>
			Quantidade
		</h3>
		<br/>
    <?php
		
			 
	        	for($i=0; $i< count ($clothingList);$i++){
	        		//echo $feedstockList[$i]->quantity;
	        		echo CHtml::textField("quant[$i]",'');
	        		echo "<br/>";
	        		echo "<br/>";
	        		
	        		


	        		
	        		
	        	
	        		

	        		
	        		
	        	}
	        	
	        ?>
    </div>


    
</div>
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