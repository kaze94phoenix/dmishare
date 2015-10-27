<?php
App::uses('AvaliacaoObra', 'Model');

/**
 * AvaliacaoObra Test Case
 *
 */
class AvaliacaoObraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.avaliacao_obra',
		'app.usuario',
		'app.obra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AvaliacaoObra = ClassRegistry::init('AvaliacaoObra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AvaliacaoObra);

		parent::tearDown();
	}

}
