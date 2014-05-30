<?php
/* @var $this UserController */
/* @var $model User */

?>

<h1>Atualizar Usuário <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>