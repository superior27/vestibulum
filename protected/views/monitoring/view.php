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
		'seam_service_provider',
		'seam_cost',
		'wash_quantity_input',
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
	),
)); ?>
