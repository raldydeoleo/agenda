<?php
/* @var $this ContactosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contactos',
);

$this->menu=array(
	array('label'=>'Crear Contactos', 'url'=>array('create')),
	array('label'=>'Manejar Contactos', 'url'=>array('admin')),
);
?>

<h1>Listado de Contactos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
