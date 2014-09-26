<?php
/* @var $this ClothingController */
/* @var $model Clothing */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clothing-form',
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
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row-fluid">
	        
	 
	    <?php 	 
    	
    	/*echo $form->checkBox($model, 'feedstockIDs', array('uncheckValue'=>0));
    	
    	foreach ($feedstockList as $feedstockElement){
    		echo CHtml::activeCheckBox($model,'feedstockIDs', 
    			CHtml::listData( $feedstockElement , 
	            'id', 
	            'name'

	        ));
    	}
    	*/
    	?>
    	<div class="span4">
    		<h3>
    			Matérias-primas
    		</h3>
    	<?php
    	$feedstockList = Feedstock::model()->findAll();
    	echo CHtml::activeCheckBoxList($model, 'feedstockIDs', 
	        CHtml::listData( $feedstockList , 
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
    		<h3>Quantidades</h3>
    		<?php
		
			 
	        	for($i =0; $i< count ($feedstockList);$i++){
	        		//echo $feedstockList[$i]->quantity;
	        		echo CHtml::textField("quant[$i]",'');
	        		echo "</br>";
	        		
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