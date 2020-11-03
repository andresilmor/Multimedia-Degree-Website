<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		// Portuguese //

		$routes['pt_home'] = array(
			'route' => '/',
			'controller' => 'ptController',
			'action' => 'home'
		);

		$routes['pt_esact'] = array(
			'route' => '/esact',
			'controller' => 'ptController',
			'action' => 'esact'
		);

		// English //

		$routes['en_home'] = array(
			'route' => '/en',
			'controller' => 'enController',
			'action' => 'home'
		);

		$routes['en_esact'] = array(
			'route' => '/en/esact',
			'controller' => 'enController',
			'action' => 'esact'
		);

		$this->setRoutes($routes);
	}

}

?>