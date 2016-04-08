<?php
/* @var $this ContactosController */
/* @var $model Contactos */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->id_contacto=>array('view','id'=>$model->id_contacto),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de  Contactos', 'url'=>array('index')),
	array('label'=>'Crear Contactos', 'url'=>array('create')),
	array('label'=>'Ver Contactos', 'url'=>array('view', 'id'=>$model->id_contacto)),
	array('label'=>'Manejar Contactos', 'url'=>array('admin')),
);
?>

<h1>Update Contactos <?php echo $model->id_contacto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>