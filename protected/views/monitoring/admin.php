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
		'seam_cost',
		'wash_quantity_input',
		'wash_quantity_output',
		/*
		'wash_cost',
		'apply_button_quantity_input',
		'apply_button_quantity_output',
		'apply_button_cost',
		'needlework_quantity_input',
		'needlework_quantity_output',
		'needlework_cost',
		'request_id',
		'cut_quantity_input',
		'cut_quantity_output',
		'cut_date_input',
		'cut_date_output',
		'cut_provider_id',
		'separation_quantity_input',
		'separation_quantity_output',
		'separation_date_input',
		'separation_date_output',
		'separation_provider_id',
		'cut_cost',
		'separation_cost',
		'needlework_date_input',
		'needlework_date_output',
		'needlework_provider_id',
		'seam_date_input',
		'seam_date_output',
		'seam_provider_id',
		'apply_button_date_input',
		'apply_button_date_output',
		'apply_button_provider_id',
		'wash_date_input',
		'wash_date_output',
		'wash_type_washing',
		'wash_differential',
		'wash_provider_id',
		'expedition_quantity_input',
		'expedition_quantity_output',
		'expedition_date_input',
		'expedition_date_output',
		'expedition_defects',
		'expedition_provider_id',
		'production_order',
		'record_number',
		'reference',
		'quantity_36',
		'quantity_38',
		'quantity_40',
		'quantity_42',
		'quantity_44',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
