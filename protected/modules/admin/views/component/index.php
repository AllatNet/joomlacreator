<?php
/**
 * User: Christian Hoefer
 * Date: 16.04.2014
 * Time: 11:25
 */


DirGenerator::getInstance()->fileSave('final4/test/tmp3', 'test.txt', 'dies ist ein test');

echo CHtml::link('Neue Komponente', Yii::app()->createUrl('/admin/component/new'));

$model = new Component('search');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'           => 'programm-grid',
	'dataProvider' => $model->search(),
	//'rowCssClassExpression'=>'$this->dataProvider->data[$row]->pgm_id',
	'filter'       => $model,
	'columns'      => array(
		array(
			'name' => 'title',
			'type'=>'raw',
			'value'=>'"<a href=\"".Yii::app()->createUrl("/admin/component/view", array("id"=>$data->id))."\">".$data->title."</a>"',
		),
		array(
			'name' => 'description',
		),
	),
));