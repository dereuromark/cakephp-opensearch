<?php
/**
 * AddonFixture
 *
 */
class AddonFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shortname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'params' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'search_var' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = array(
		array(
			'id' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 2,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 3,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 4,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 5,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 6,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 7,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 8,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 9,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
		array(
			'id' => 10,
			'url' => 'Lorem ipsum dolor sit amet',
			'shortname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet',
			'search_var' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum do'
		),
	);
}
