<?php
namespace app\controllers;

use stdClass;

class Main extends \app\core\Controller{

function index(){
    $this->view('Main/menu');

    		//showing the register view
		$this->view('Main/index');
}
}