<?php
App::uses('Bussiness', 'Model');

/**
 * Bussiness Test Case
 *
 */
class BussinessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bussiness'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bussiness = ClassRegistry::init('Bussiness');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bussiness);

		parent::tearDown();
	}

}
