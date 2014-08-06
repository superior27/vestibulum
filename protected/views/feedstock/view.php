<?php
/* @var $this FeedstockController */
/* @var $model Feedstock */




?>

<h1>Visualizar Matéria-Prima #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'price',
		'quantity',
		'description',
		'provider_id',
		'providerName',
		
	),
));
?>
<div class="row-fluid">
	<div class="span4">
		<br />
		<?php
			echo CHtml::link('Voltar','admin',array("class"=>"btn btn-large"));
		?>
	</div>

	<div class="span6">
		<div class="offset10">
		<br />
		<?php
			echo CHtml::link('Diminuir',array("feedstock/estoque2","id"=>$model->id),array("class"=>"btn btn-large btn-danger")); 
		?>
	</div>
	</div>
	<div class="span2">
		<div class="offset3">
			<br />
		<?php
			echo CHtml::link('Aumentar',array("feedstock/estoque","id"=>$model->id),array("class"=>"btn btn-large btn-success")); 
		?>
	</div>
	</div>
</div>


