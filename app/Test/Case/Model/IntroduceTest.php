<?php
App::uses('Introduce', 'Model');

/**
 * Introduce Test Case
 *
 */
class IntroduceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.introduce'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Introduce = ClassRegistry::init('Introduce');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Introduce);

		parent::tearDown();
	}

}
