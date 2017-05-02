<?php
App::uses('Supporter', 'Model');

/**
 * Supporter Test Case
 *
 */
class SupporterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supporter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Supporter = ClassRegistry::init('Supporter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Supporter);

		parent::tearDown();
	}

}
