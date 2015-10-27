<?php
/**
 * AvaliacaoObraFixture
 *
 */
class AvaliacaoObraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'usuario_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'obra_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'data_avaliacao' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'usuario_id' => array('column' => 'usuario_id', 'unique' => 1),
			'obra_id' => array('column' => 'obra_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'usuario_id' => 1,
			'obra_id' => 1,
			'data_avaliacao' => '2015-05-06'
		),
	);

}
