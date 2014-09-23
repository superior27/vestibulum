<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */

$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
	array('label'=>'Update Monitoring', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Monitoring', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Monitoring', 'url'=>array('admin')),
);
?>

<h1>View Monitoring #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'seam_quantity_input',
		'seam_quantity_output',
		'seam_cost',
		'wash_quantity_input',
		'wash_quantity_output',
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
	),
)); ?>
