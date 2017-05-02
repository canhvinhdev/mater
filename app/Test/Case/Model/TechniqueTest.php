<?php
App::uses('Technique', 'Model');

/**
 * Technique Test Case
 *
 */
class TechniqueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.technique',
		'app.product',
		'app.category',
		'app.post',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Technique = ClassRegistry::init('Technique');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Technique);

		parent::tearDown();
	}

}
