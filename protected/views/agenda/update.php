<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->idcontact=>array('view','id'=>$model->idcontact),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Contactos', 'url'=>array('index')),
	array('label'=>'Crear contacto', 'url'=>array('create')),
	array('label'=>'Ver contacto', 'url'=>array('view', 'id'=>$model->idcontact)),
	array('label'=>'Manejar contacto', 'url'=>array('admin')),
);
?>

<h1>Actualiza contacto <?php echo $model->idcontact; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>