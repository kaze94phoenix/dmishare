<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Work $Work
 */
class Tag extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Work' => array(
			'className' => 'Work',
			'joinTable' => 'works_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'work_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
