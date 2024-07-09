<?php

class SubClass extends BaseClass {
	protected $private; // Allowed
	public $private;  // Allowed
	public $protected;  // Allowed

	public $kostas_mitsanas;
	
	private $protected; // NOT ALLOWED
}

class Konstantina {
	/* Insert functions here */
}

class BadCar {
	public function mariadamaskou() {}
	public function createCar() {}
	public function createLimousine() {}
	public function createSUV() {}
	public function createSuperCar() {}
	public function Kostas() {}
	/** and the list goes on... */

	public function papikas() {
		
	}
}

class Nikoletta{
	
}