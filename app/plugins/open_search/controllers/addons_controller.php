<?php

Class AddonsController extends OpenSearchAppController
{
	public function index($what='web')
	{
		$options = $this->Addon->find('first', array('conditions'=>array('name'=>$what)));
		$p = $this->unserialize_params($options['Addon']['params']);
		$options['Addon']['params'] = $p;
		$this->set('options',$options['Addon']);
		$this->render_xml();
	}
	protected function unserialize_params($params) {
		$p =explode('|',$params);
		$out = array();
		foreach($p as $e) {
			$res = explode(':',$e);
			$out[$res[0]] = $res[1];
		}
		return $out;
	
	}
	protected function serialize_params($params) {
		$res ='';
		foreach($params as $k=>$v) {
			$res .= "$k:$v|";
		}
		return $res;
	}

	private function render_xml() {
		$this->layout='xml/default';
		$this->render('xml/index');
	}

}
?>
