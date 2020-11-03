<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class enController extends Action {

	public function home() {
		$this->render('enHome', 'pt_home_layout');
	}

}


?>