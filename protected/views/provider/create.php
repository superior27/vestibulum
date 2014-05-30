<?php
/* @var $this ProviderController */
/* @var $model Provider */

$this->breadcrumbs=array(
	'Providers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Fornecedor', 'url'=>array('index')),
	array('label'=>'Alterar Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Fornecedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>