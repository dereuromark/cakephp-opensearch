<?php
App::uses('OpenSearchAppModel', 'OpenSearch.Model');

class Addon extends OpenSearchAppModel {

	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'valErrMandatoryField',
				'last' => true,
			),
			'validateUnique' => array(
				'rule' => array('validateUnique'),
				'message' => 'valErrRecordNameExists',
				'last' => true,
			),
		),
	);

}
