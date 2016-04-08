<?php
/* @var $this ContactosController */
/* @var $data Contactos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contacto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contacto), array('view', 'id'=>$data->id_contacto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->ape_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('init')); ?>:</b>
	<?php echo CHtml::encode($data->init); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->tel_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo Electronico')); ?>:</b>
	<?php echo CHtml::encode($data->correo_contacto); ?>
	<br />


</div>