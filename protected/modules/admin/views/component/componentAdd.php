<?php
/**
 * User: Christian Hoefer
 * Date: 17.04.2014
 * Time: 10:29
 */


$form = $this->beginWidget('CActiveForm', array(
	'action'                 => Yii::app()->createUrl('admin/component/new', array()),
	'id'                     => 'notiz-form',
	'enableClientValidation' => true,
	'clientOptions'          => array(
		'validateOnSubmit' => true,
		'validateOnChange' => true,
		'hideErrorMessage' => true,
	),
	'htmlOptions'            => array(
		'id' => 'componentCreateForm',
	),
)); ?>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-4">
			<?php echo $form->labelEx($model, 'title', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-8">
			<?php echo $form->error($model, 'title'); ?>
			<?php echo $form->textField($model, 'title', array('class' => 'form-control')); ?>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
	<br />

	<div class="row">
		<div class="col-md-4">
			<?php echo $form->labelEx($model, 'author', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-8">
			<?php echo $form->error($model, 'author'); ?>
			<?php echo $form->textField($model, 'author', array('class' => 'form-control')); ?>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
	<br />

	<div class="row">
		<div class="col-md-4">
			<?php echo $form->labelEx($model, 'authorMail', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-8">
			<?php echo $form->error($model, 'authorMail'); ?>
			<?php echo $form->textField($model, 'authorMail', array('class' => 'form-control')); ?>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
	<br />


	<div class="row">
		<div class="col-md-4">
			<?php echo $form->labelEx($model, 'authorUrl', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-8">
			<?php echo $form->error($model, 'authorUrl'); ?>
			<?php echo $form->textField($model, 'authorUrl', array('class' => 'form-control')); ?>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
	<br />


	<div class="row">
		<div class="col-md-4">
			<?php echo $form->labelEx($model, 'description', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-8">
			<?php echo $form->error($model, 'description'); ?>
			<?php echo $form->textArea($model, 'description', array('class' => 'form-control')); ?>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

<?php
echo CHtml::submitButton('Speichern');
$this->endWidget();