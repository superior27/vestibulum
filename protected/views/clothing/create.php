<?php
/* @var $this ClothingController */
/* @var $model Clothing */



$this->menu=array(
	array('label'=>'Listar Peças', 'url'=>array('index')),
	array('label'=>'Atualizar Peças', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Peças</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>