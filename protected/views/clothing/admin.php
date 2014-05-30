<?php
/* @var $this ClothingController */
/* @var $model Clothing */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clothing-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Minhas Peças</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Cadastrar Peça','create'); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'id'=>'clothing-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'price',
		'description',
		array(
            'header'=>'Clothing Feedstock',
            'name'=>'feedstocks.id',
            'type'=>'raw',
            'value'=>'implode(", ",$data->feedstockNames)'
            ),
       array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
