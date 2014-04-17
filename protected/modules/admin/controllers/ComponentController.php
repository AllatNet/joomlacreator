<?php

class ComponentController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights',
		);
	}

	public function actionIndex() {
		$this->render('index');
	}

	public function actionNew(){
		$model = new Component();

		if(isset($_POST['Component'])){
			$model->attributes = $_POST['Component'];
			if($model->save(false)){
				$this->redirect(Yii::app()->createUrl('/admin/compontent/index'));
			}
		}

		$this->render('componentAdd', array(
			'model'=>$model,
		));
	}

	public function actionView($id) {
		Yii::app()->session['component'];
		$model = Component::model()->findByPk($id);
		$this->render('view', array(
			'model'=>$model,
		));
	}
}
