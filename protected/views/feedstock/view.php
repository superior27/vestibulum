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
echo CHtml::link('Voltar','admin');
echo CHtml::link(' Aumentar ',array("feedstock/estoque","id"=>$model->id)); 
echo CHtml::link('Diminuir',array("feedstock/estoque2","id"=>$model->id)); 

?>
