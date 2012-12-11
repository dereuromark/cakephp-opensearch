<?php
App::uses('AppHelper', 'View/Helper');

class OpenSearchHelper extends AppHelper {

	public $settings = array('xhtml' => true);

	public $helpers = array('Html');

	/**
	 * //TODO: allow HTTPS
	 * @return string Url
	 */
	public function metaUrl($name) {
		$pluginUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/open_search/addons/index/' . $name . '.xml';
		return $pluginUrl;
	}

	/**
	 * @return string Html link
	 */
	public function metaLink($name, $title = null) {
		extract($this->settings);
		if ($title === null) {
			$title = Configure::read('Config.page_name');
		}

		$pluginUrl = $this->metaUrl($name);
		$lynk = '<link rel="search" title="' . h($title) . '" type="application/opensearchdescription+xml" href="' . h($pluginUrl) . '" ';
		if ($xhtml) {
			$lynk .= '/';
		}
		$lynk .= '>';
		return $lynk;
	}

	/**
	 * @return string Html link
	 */
	public function installLink($label, $name, $options = array()) {
		$pluginUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/open_search/addons/index/' . $name . '.xml';

		$url = '#';
		if (isset($options['url'])) {
			$url = $options['url'];
			unset($options['url']);
		}
		$options['onclick'] = 'window.external.AddSearchProvider(\''.$pluginUrl.'\');';
		/*
		$link = '<a title="' . h($title) . '" href="#"';
		$params = '';
		foreach ($options as $k => $v) {
			$params .= $k = '"' . $v . '" ';
		}
		$link .= $params;
		$link .= " onclick='window.external.AddSearchProvider(\"$plugin_url\"); '";
		$link .= '>' . $label . '</a>';
		*/
		return $this->Html->link($label, $url, $options);
	}

}
