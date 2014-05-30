<?php
/* @var $this FeedstockController */
/* @var $model Feedstock */

$this->breadcrumbs=array(
	'Feedstocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Matéria-Prima', 'url'=>array('index')),
	array('label'=>'Alterar Matéria-Prima', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Matéria-Prima</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>