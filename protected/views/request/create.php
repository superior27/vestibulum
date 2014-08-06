<?php
/* @var $this RequestController */
/* @var $model Request */

$this->breadcrumbs=array(
	'Pedido'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Pedido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>