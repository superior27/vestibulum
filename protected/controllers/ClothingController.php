<?php

class ClothingController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Clothing;
		//$name = "";

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Clothing']))
		{
			$model->attributes=$_POST['Clothing'];
			$model->feedstocks=$_POST['Clothing']['feedstockIDs'];
			$model->feedstockQuantity=$_POST['quant'];
			$model->price = 0;
			if($model->save()){
				for($i=0;$i<count($model->feedstockQuantity);$i++){
					for($j=0;$j<count($model->feedstockQuantity);$j++)
					if($model->feedstockQuantity[$j]==''){
						$aux = $model->feedstockQuantity[$j];
						$model->feedstockQuantity[$j] = $model->feedstockQuantity[$i];
						$model->feedstockQuantity[$i] = $aux;
					}
					
				}
				
				for($i=0;$i<count($model->feedstocks);$i++){
					
					
					$cF = ClothingHasFeedstock::model()->findByPk(array('clothing_id' => $model->id,'feedstock_id'=>$model->feedstocks[$i]));
					$myFeedstock = Feedstock::model()->findByPk(array('id'=>$model->feedstocks[$i]));
					$cF->save();
					$cF->clothing_has_feedstock_quantity = $model->feedstockQuantity[$i];										
					$model->price += $myFeedstock->price*$cF->clothing_has_feedstock_quantity;					
					$cF->update();
					$cF->save();
					//if($cF->clothing_has_feedstock_quantity > $myFeedstock->quantity){
					//	echo "<script>alert('message');</script>";
					//}
					//else{
					//$number.=(string)$cF->clothing_has_feedstock_quantity;
					$model->update();					
					//}
				
				}
				//$model->description=$name;
				$model->update();
				$cF->update();
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

		if(isset($_POST['Clothing']))
		{
			$model->attributes=$_POST['Clothing'];
			$model->feedstocks=$_POST['Clothing']['feedstockIDs'];
			$model->feedstockQuantity=$_POST['quant'];
			$model->price = 0;
			if($model->save()){
				for($i=0;$i<count($model->feedstockQuantity);$i++){
					for($j=0;$j<count($model->feedstockQuantity);$j++)
					if($model->feedstockQuantity[$j]==''){
						$aux = $model->feedstockQuantity[$j];
						$model->feedstockQuantity[$j] = $model->feedstockQuantity[$i];
						$model->feedstockQuantity[$i] = $aux;
					}
					
				}
				
				for($i=0;$i<count($model->feedstocks);$i++){
					
					$transaction = Yii::app()->db->beginTransaction();
					
					//$cF->save();
					$myFeedstock = Feedstock::model()->findByPk(array('id'=>$model->feedstocks[$i]));					
										
					//$cF->update();
					//$cF->save();
					try 
					{
						$cF = ClothingHasFeedstock::model()->findByPk(array('clothing_id' => $model->id,'feedstock_id'=>$model->feedstocks[$i]));						
						$cF->clothing_has_feedstock_quantity = $model->feedstockQuantity[$i];
						$cF->save();
						$transaction->commit();
						
					}
					catch (Exception $e)
					{
						$transaction->rollBack();
						
					}
					$model->price += $myFeedstock->price*$cF->clothing_has_feedstock_quantity; 

					//if($cF->clothing_has_feedstock_quantity > $myFeedstock->quantity){
					//	echo "<script>alert('message');</script>";
					//}
					//else{
					//$number.=(string)$cF->clothing_has_feedstock_quantity;
					$model->update();					
					//}
				
				}
				//$model->description=$number;
				$model->update();
				$cF->update();
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
		$dataProvider=new CActiveDataProvider('Clothing');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Clothing('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Clothing']))
			$model->attributes=$_GET['Clothing'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Clothing the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Clothing::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Clothing $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='clothing-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
