<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Contacto'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Contactos', 'url'=>array('index')),
	array('label'=>'Ver contactos ', 'url'=>array('admin')),
);
?>

<h1>Crear Contacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>