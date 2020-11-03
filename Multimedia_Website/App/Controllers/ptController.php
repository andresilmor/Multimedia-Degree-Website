<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class ptController extends Action {

	public function home() {
		$this->render('ptHome', 'pt_home_layout');
	}

	public function esact() {
		$this->render('ptEsact', 'pt_esact_layout');
	}

}


?>