<?php

class HolaController extends Controller
{
	public function actionIndex()
	{   
		
		$twitter="@printek_sa";
		$this->render('index',array("twitter"=>$twitter));

	}		
}