<?php
/* @var $this ContactosController */
/* @var $model Contactos */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	'Manejar',
);

$this->menu=array(
	array('label'=>'Lista de Contactos', 'url'=>array('index')),
	array('label'=>'Crear Contactos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contactos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manejar Contactos</h1>

<p>
Puedes opcionalmente entrar un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada valor de busqueda para especificar criterios.
</p>

<?php echo CHtml::link('Busqueda Advanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contactos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_contacto',
		'nom_contacto',
		'ape_contacto',
		'init',
		'tel_contacto',
		'correo_contacto',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
