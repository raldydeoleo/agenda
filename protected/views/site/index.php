<?php


$this->pageTitle=Yii::app()->name;
?>

<h1>Aplicacion: <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Esta aplicacion le permitira gestionar sus contactos de forma facil.</p>

<p>Raldy De Oleo:</p>
<ul>
	<img src="/Test1/images/agenda.png">
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Desarrollado para fines de prueba.
<a href="http://www.wordpress.raldydeoleo">Blog Personal</a>.
Yii: <a href="http://www.yiiframework.com/forum/">forum</a>,
</p>
