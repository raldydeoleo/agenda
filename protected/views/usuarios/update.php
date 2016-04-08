<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->init=>array('view','id'=>$model->init),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'View Usuarios', 'url'=>array('view', 'id'=>$model->init)),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>Update Usuarios <?php echo $model->init; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>