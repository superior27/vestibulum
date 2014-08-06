<?php
/* @var $this RequestController */
/* @var $model Request */



$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'View Request', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>Atualizar Pedido #<?php echo $model->description; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>