<?php
/* @var $this ClothingController */
/* @var $model Clothing */


?>

<h1>Atualizar Peças <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>