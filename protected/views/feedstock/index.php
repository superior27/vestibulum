<?php
/* @var $this FeedstockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feedstocks',
);

$this->menu=array(
	array('label'=>'Cadastrar Matéria-Prima', 'url'=>array('create')),
	array('label'=>'Alterar Matéria-Prima', 'url'=>array('admin')),
);
?>

<h1>Matéria-Prima</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
