<?php
/* @var $this FeedstockController */
/* @var $model Feedstock */


?>

<h1>Atualizar Quantidade <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_estoque2', array('model'=>$model)); ?>