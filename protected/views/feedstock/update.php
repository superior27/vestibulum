<?php
/* @var $this FeedstockController */
/* @var $model Feedstock */


?>

<h1>Atualizar Matéria-Prima <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>