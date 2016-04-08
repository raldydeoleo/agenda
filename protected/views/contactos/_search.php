<?php
/* @var $this ContactosController */
/* @var $model Contactos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contacto'); ?>
		<?php echo $form->textField($model,'id_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_contacto'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ape_contacto'); ?>
		<?php echo $form->textField($model,'ape_contacto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'init'); ?>
		<?php echo $form->textField($model,'init',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_contacto'); ?>
		<?php echo $form->textField($model,'tel_contacto',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_contacto'); ?>
		<?php echo $form->textField($model,'correo_contacto',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->