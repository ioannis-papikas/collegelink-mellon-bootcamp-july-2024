<?php

class SubClass extends BaseClass {
	protected $private; // Allowed
	public $private;  // Allowed
	public $protected;  // Allowed

	public $kostas_mitsanas;
	
	private $protected; // NOT ALLOWED
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


class IoannaSp {
	public function randomFunc() {}
	public function randomFunc2() {}
	public function randomFunc3() {}
}

}
class Nikoletta{
	
}