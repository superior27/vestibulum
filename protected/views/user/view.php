<?php
/* @var $this UserController */
/* @var $model User */




?>

<h1>Visualizar Usuário #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); 
echo CHtml::link('Voltar','admin'); 

?>
