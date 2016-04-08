<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->idcontact,
);

$this->menu=array(
	array('label'=>'Lista de contactos', 'url'=>array('index')),
	array('label'=>'Crear contacto', 'url'=>array('create')),
	array('label'=>'Actualizar contacto', 'url'=>array('update', 'id'=>$model->idcontact)),
	array('label'=>'Eliminar contacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcontact),'confirm'=>'Esta seguro que desea borrar este elemento?')),
	array('label'=>'Manejar contactos', 'url'=>array('admin')),
);
?>

<h1>View Agenda #<?php echo $model->idcontact; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcontact',
		'nom_contact',
		'ape_contact',
		'correo_contact',
		'tel_contact',
		'id',
	),
)); ?>
