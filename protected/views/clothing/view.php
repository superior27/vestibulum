<?php
/* @var $this ClothingController */
/* @var $model Clothing */




?>

<h1>Visualizar Peças #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'price',
		'description',
		array(
			'label'=>'Clothing Feedstocks',
			'name'=>'feedstocks.id',
			'type'=>'raw',
			'value'=>implode("<br>",$model->feedstockNames)

			)
	),
)); 
echo CHtml::link('Voltar','admin'); 

?>
