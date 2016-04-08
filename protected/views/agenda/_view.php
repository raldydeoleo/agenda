<?php
/* @var $this AgendaController */
/* @var $data Agenda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcontact')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcontact), array('view', 'id'=>$data->idcontact)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido contacto')); ?>:</b>
	<?php echo CHtml::encode($data->ape_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo contacto')); ?>:</b>
	<?php echo CHtml::encode($data->correo_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono contacto')); ?>:</b>
	<?php echo CHtml::encode($data->tel_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />


</div>