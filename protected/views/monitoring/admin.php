<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
/*
$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
);
*/
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

<h1>Meus Acompanhamentos</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php echo CHtml::link('Novo Acompanhamento','create',array("class"=>"btn btn-large btn-success")); ?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'id'=>'feedstock-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*
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
		'quantity_36',
		'quantity_38',
		'quantity_40',
		'quantity_42',
		'quantity_44',

		*/
		'production_order',
		'record_number',
		'reference',
		'client',
		'client_cnpj',

		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
