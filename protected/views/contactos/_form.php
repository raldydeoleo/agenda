<?php
/* @var $this ContactosController */
/* @var $model Contactos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contactos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Dato <span class="required">*</span> requerido.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row",  class="note"> <span class="required">*</span>
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nom_contacto'); ?>
	</div>

	<div class="row",  class="note"> <span class="required">*</span>
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'ape_contacto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ape_contacto'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'Usuario'); ?>
	<?php echo $form->textField($model,'init',array('size'=>15,'maxlength'=>15)); ?>
	<?php echo $form->error($model,'init'); ?>
			<?php
	$conexion= mysql_connect("localhost", "root","netpro2016");
	mysql_select_db("Test1", $conexion);

	$registros = mysql_query("select * from Usuarios", $conexion);
 		
		echo "<select name='select1'>";
		echo "<option selected=0>";
		echo "Seleccione Usuario";
		echo "</option>"; 
		while ($fila = mysql_fetch_array($registros)){
						
			echo "<option value='1'>", $fila["init"];
			echo "</option>";
			
			

		} echo "</select>";

		


?>


		
		
	</div>

	<div class="row",  class="note"> <span class="required">*</span>	
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'tel_contacto',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tel_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo Electronico'); ?>
		<?php echo $form->textField($model,'correo_contacto',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'correo_contacto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::resetButton($model->isNewRecord ? 'Limpiar' : 'Limpiar'); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?> 
	</div>


		
	



<?php $this->endWidget(); ?>

</div><!-- form -->