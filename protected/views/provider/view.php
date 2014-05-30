<?php
/* @var $this ProviderController */
/* @var $model Provider */


?>

<h1>Visualizar Fornecedor #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'phone_number',
		'email',
	),
)); 
echo CHtml::link('Voltar','admin'); 
?>
