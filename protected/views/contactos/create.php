<?php
/* @var $this ContactosController */
/* @var $model Contactos */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Contactos', 'url'=>array('index')),
	array('label'=>'Manejar Contactos', 'url'=>array('admin')),
);
?>

<h1>Crear Contactos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>