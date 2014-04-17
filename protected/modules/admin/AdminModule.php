<?php
/**
 * Yii-Mailing module
 *
 * @author Christian Hoefer <ch@allatnet.de>
 */

class AdminModule extends CWebModule
{

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
			'cgenerator.components.*',
		));
	}

	public function getBehaviorsFor($componentName){
		if (isset($this->componentBehaviors[$componentName])) {
			return $this->componentBehaviors[$componentName];
		} else {
			return array();
		}
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}

	/**
	 * @param $str
	 * @param $params
	 * @param $dic
	 * @return string
	 */
	public static function t($str='',$params=array(),$dic='admin') {
		if (Yii::t("AdminModule", $str)==$str)
			return Yii::t("Admin.".$dic, $str, $params);
		else
			return Yii::t("Admin", $str, $params);
	}

}
