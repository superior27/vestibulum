<?php
/* @var $this ProviderController */
/* @var $model Provider */


?>

<h1>Atualizar Fornecedor <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>