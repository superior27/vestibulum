<?php
/* @var $this UserController */
/* @var $model User */



$this->menu=array(
	array('label'=>'Listar Usuário', 'url'=>array('index')),
	array('label'=>'Alterar Usuário', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Usuário</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>