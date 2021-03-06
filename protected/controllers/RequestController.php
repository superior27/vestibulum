<?php

class RequestController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index',),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','view',),
				'roles'=>array('pedido','admin',),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Request;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Request']))
		{
			$model->attributes=$_POST['Request'];
			$model->clothings=$_POST['Request']['clothingIDs'];
			$model->clothingQuantity=$_POST['quant'];
			$model->price = 0;
			if($model->save()){
				for($i=0;$i<count($model->clothingQuantity);$i++){
					for($j=0;$j<count($model->clothingQuantity);$j++){
					if($model->clothingQuantity[$j]==''){
						$aux = $model->clothingQuantity[$j];
						$model->clothingQuantity[$j] = $model->clothingQuantity[$i];
						$model->clothingQuantity[$i] = $aux;
					}
				}
			}
				for($i=0;$i<count($model->clothings);$i++){
					
					$model->save();
					$requestHasClothing = RequestHasClothing::model()->findByPk(array('request_id' => $model->id,'clothing_id'=>$model->clothings[$i]));
					
					$requestHasClothing->quantity = $model->clothingQuantity[$i];
					$requestHasClothing->save();
					$myClothing = Clothing::model()->findByPk(array('id'=>$model->clothings[$i]));
					//$cF->save();															
					$model->price += $myClothing->price*$requestHasClothing->quantity;					
					//$cF->update();
					$requestHasClothing->save();
					//$name.=(string)$requestHasClothing->clothing_has_feedstock_quantity." ";
					//if($cF->clothing_has_feedstock_quantity > $myFeedstock->quantity){
					//	echo "<script>alert('message');</script>";
					//}
					//else{
					//$number.=(string)$cF->clothing_has_feedstock_quantity;
					$model->save();					
					//}
				
				}

				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Request']))
		{
			$model->attributes=$_POST['Request'];
			$model->clothings=$_POST['Request']['clothingIDs'];
			$model->clothingQuantity=$_POST['quant'];
			$model->price = 0;
			if($model->save()){
				for($i=0;$i<count($model->clothingQuantity);$i++){
					for($j=0;$j<count($model->clothingQuantity);$j++){
					if($model->clothingQuantity[$j]==''){
						$aux = $model->clothingQuantity[$j];
						$model->clothingQuantity[$j] = $model->clothingQuantity[$i];
						$model->clothingQuantity[$i] = $aux;
					}
				}
			}
				for($i=0;$i<count($model->clothings);$i++){
					
					$model->save();
					$requestHasClothing = RequestHasClothing::model()->findByPk(array('request_id' => $model->id,'clothing_id'=>$model->clothings[$i]));
					
					$requestHasClothing->quantity = $model->clothingQuantity[$i];
					$requestHasClothing->save();
					$myClothing = Clothing::model()->findByPk(array('id'=>$model->clothings[$i]));
					//$cF->save();															
					$model->price += $myClothing->price*$requestHasClothing->quantity;					
					//$cF->update();
					$requestHasClothing->save();
					//$name.=(string)$requestHasClothing->clothing_has_feedstock_quantity." ";
					//if($cF->clothing_has_feedstock_quantity > $myFeedstock->quantity){
					//	echo "<script>alert('message');</script>";
					//}
					//else{
					//$number.=(string)$cF->clothing_has_feedstock_quantity;
					$model->save();					
					//}
				
				}

				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Request');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Request('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Request']))
			$model->attributes=$_GET['Request'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Request the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Request::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Request $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='request-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
