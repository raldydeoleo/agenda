<?php
/* @var $this AgendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contactos',
);

$this->menu=array(
	array('label'=>'Crear Contactos', 'url'=>array('create')),
	array('label'=>'Ver Contactos', 'url'=>array('admin')),
);
?>

<h1>Contactos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
