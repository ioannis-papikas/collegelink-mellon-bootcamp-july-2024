<?php

class SubClass extends BaseClass {
	protected $private; // Allowed
	public $private;  // Allowed
	public $protected;  // Allowed

	private $protected; // NOT ALLOWED
}


class BadCar {
	public function createCar() {}
	public function createLimousine() {}
	public function createSUV() {}
	public function createSuperCar() {}
	public function aldoPatusi() {}
	/** and the list goes on... */
}
