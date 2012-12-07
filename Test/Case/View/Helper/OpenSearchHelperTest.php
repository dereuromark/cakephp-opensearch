<?php

App::uses('OpenSearchHelper', 'OpenSearch.View/Helper');
App::uses('View', 'View');
App::uses('MyCakeTestCase', 'Tools.TestSuite');

/**
 * 2012-11-23 ms
 */
class OpenSearchHelperTest extends MyCakeTestCase {

	public $OpenSearch;

	/**
	 * @return void
	 */
	public function setUp() {
		parent::setUp();

		$this->OpenSearch = new OpenSearchHelper(new View(null));
	}

	/**
	 * @return void
	 */
	public function tearDown() {
		unset($this->OpenSearch);
	}

	/**
	 * @return void
	 */
	public function testMetaLink() {
		$is = $this->OpenSearch->metaLink('name-one', 'title-one');
		debug($is); ob_flush();
		$expected = '<link rel="search" title="title-one" type="application/opensearchdescription+xml" href="'.$this->OpenSearch->metaUrl('name-one').'" />';
		$this->assertEquals($expected, $is);
	}

	/**
	 * @return void
	 */
	public function testInstallLink() {
		$is = $this->OpenSearch->installLink('Name One', 'name-one');
		debug($is); ob_flush();
		$expected = '<a href="#" onclick="window.external.AddSearchProvider(&#039;'.$this->OpenSearch->metaUrl('name-one').'&#039;);">Name One</a>';
		//$this->assertEquals($expected, $is);
	}

}
