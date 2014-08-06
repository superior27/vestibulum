<?php
/* @var $this ProviderController */
/* @var $model Provider */



$this->menu=array(
	array('label'=>'Listar Fornecedor', 'url'=>array('index')),
	array('label'=>'Alterar Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Fornecedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>