<?php
/* @var $this RequestController */
/* @var $model Request */



$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'Update Request', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>Detalhes do Pedido #<?php echo $model->description; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'description',				
		'production_order',
		'record_number',
		'reference',
		'client_name',
		'client_cnpj',
		'price',
	),
)); ?>
