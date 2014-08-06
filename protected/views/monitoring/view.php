<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */



$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
	array('label'=>'Update Monitoring', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Monitoring', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Monitoring', 'url'=>array('admin')),
);
?>

<h1>Acompanhamento #<?php echo $model->requestDescription; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'requestDescription',		
		'seam_service_provider',
		'seam_cost',		
		'wash_service_provider',
		'wash_cost',
		'apply_button_service_provider',
		'apply_button_cost',
		'needlework_service_provider',
		'needlework_cost',
		
	),
)); 
?>

<div class="row-fluid">
	<div class="span4">
		<br />
		<?php
			echo CHtml::link('Voltar','admin',array("class"=>"btn btn-large"));
		?>
	</div>

	<div class="span8">
		<div class="offset10">
		<br />
		<?php
			echo CHtml::link('Relatorio ',array("monitoring/relatorio","id"=>$model->id),array("class"=>"btn btn-large btn-success")); 
		?>
		</div>
	</div>
	
</div>
