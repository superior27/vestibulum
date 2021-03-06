<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse',
    'collapse'=>'true',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(                
				array('label'=>'Usuário', 'url'=>array('/user/admin')),
				array('label'=>'Fornecedor', 'url'=>array('/provider/admin')),
				array('label'=>'Matéria-Prima', 'url'=>array('/feedstock/admin')),
				array('label'=>'Peças', 'url'=>array('/clothing/admin')),
                array('label'=>'Pedido', 'url'=>array('/request/admin')),
                array('label'=>'Acompanhamento', 'url'=>array('/monitoring/admin')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<div id="footer1">
		Copyright &copy; <?php echo date('Y'); ?> CommSystem.<br/>
		Todos os Direitos Reservados.<br/><a href="http://azmind.com">CommSystem</a>.</p>
		
	</div><!-- footer -->
</div><!-- page -->

</body>
</html>
