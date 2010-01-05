<?php
Class OpenSearchHelper extends AppHelper
{
	public $helpers = array('Html');
	public function generate_meta_link($title, $name, $xhtml=true)
	{
		$plugin_url = 'http://'.$_SERVER['HTTP_HOST'].'/open_search/addons/index/'.$name.'.xml';
		$lynk ='<link rel="search" title="'.$title.'" type="application/opensearchdescription+xml" href="'.$plugin_url.'" ';
		if ($xhtml)
		{
			$lynk.='/';
		}
		$lynk .='>';
		return $lynk;
	}
	public function link($label, $name, $options = array(), $title='')
	{

	// js -> inline -> window.external.AddSearchProvider ('full url?')

		$plugin_url = 'http://'.$_SERVER['HTTP_HOST'].'/open_search/addons/index/'.$name.'.xml';
		$link  = '<a title="'.$title.'" href="#"';
		$params ='';
		foreach ($options as $k=>$v)
		{
			$params .= $k = '"'.$v.'" ';
		}
		$link .= $params;
		$link .= " onclick='window.external.AddSearchProvider(\"$plugin_url\"); '";
		$link .= '>'.$label.'</a>';
		return $link;
		
	}
}
?>
