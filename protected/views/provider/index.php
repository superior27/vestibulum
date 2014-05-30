<?php
/* @var $this ProviderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Providers',
);

$this->menu=array(
	array('label'=>'Cadastrar Fornecedor', 'url'=>array('create')),
	array('label'=>'Alterar Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Fornecedor</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
