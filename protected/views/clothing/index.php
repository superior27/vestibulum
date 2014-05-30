<?php
/* @var $this ClothingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clothings',
);

$this->menu=array(
	array('label'=>'Cadastrar Peças', 'url'=>array('create')),
	array('label'=>'Alterar Peças', 'url'=>array('admin')),
);
?>

<h1>Peças</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
