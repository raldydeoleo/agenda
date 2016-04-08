<?php
/* @var $this ContactosController */
/* @var $model Contactos */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->id_contacto,
);

$this->menu=array(
	array('label'=>'Lista de Contactos', 'url'=>array('index')),
	array('label'=>'Crear Contactos', 'url'=>array('create')),
	array('label'=>'Actualizar Contactos', 'url'=>array('update', 'id'=>$model->id_contacto)),
	array('label'=>'Borrar Este Contacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contacto),'confirm'=>'Esta seguro que desea borrar este contacto?')),
	array('label'=>'Manejar Contactos', 'url'=>array('admin')),
);
?>

<h1>View Contactos #<?php echo $model->id_contacto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contacto',
		'nom_contacto',
		'ape_contacto',
		'init',
		'tel_contacto',
		'correo_contacto',
	),
)); ?>
