<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */

$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#monitoring-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Monitorings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'monitoring-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'seam_quantity_input',
		'seam_quantity_output',
		'seam_service_provider',
		'seam_cost',
		'wash_quantity_input',
		/*
		'wash_quantity_output',
		'wash_service_provider',
		'wash_cost',
		'apply_button_quantity_input',
		'apply_button_quantity_output',
		'apply_button_service_provider',
		'apply_button_cost',
		'needlework_quantity_input',
		'needlework_quantity_output',
		'needlework_service_provider',
		'needlework_cost',
		'request_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
