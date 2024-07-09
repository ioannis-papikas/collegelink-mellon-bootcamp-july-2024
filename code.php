<?php

class SubClass extends BaseClass {
	protected $private; // Allowed
	public $private;  // Allowed
	public $protected;  // Allowed

	public $kostas_mitsanas;
	
	private $protected; // NOT ALLOWED
}


class BadCar {
	public function createCar() {}
	public function createLimousine() {}
	public function createSUV() {}
	public function createSuperCar() {}
	/** and the list goes on... */
}
