<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre: '); ?>
		<?php echo $form->textField($model,'nom_contact',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nom_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido:'); ?>
		<?php echo $form->textField($model,'ape_contact',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ape_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo Electronico:'); ?>
		<?php echo $form->textField($model,'correo_contact',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'correo_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono:'); ?>
		<?php echo $form->textField($model,'tel_contact',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'tel_contact'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div> 

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->