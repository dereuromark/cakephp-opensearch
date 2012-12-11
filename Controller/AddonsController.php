<?php
App::uses('OpenSearchAppController', 'OpenSearch.Controller');

/**
 * Addons Controller
 *
 */
class AddonsController extends OpenSearchAppController {

	public $paginate = array();

	public function beforeFilter() {
		parent::beforeFilter();
	}

/****************************************************************************************
 * USER functions
 ****************************************************************************************/

	/**
	 * main method
	 * //TODO: add caching!
	 * 2012-12-05 ms
	 */
	public function index($what = 'web') {
		$addon = $this->Addon->find('first', array('conditions' => array('name' => $what)));
		if (!$addon) {
			throw new NotFoundException();
		}
		$p = $this->_unserializeParams($addon['Addon']['params']);
		$addon['Addon']['params'] = $p;
		$this->set('addon', $addon['Addon']);
	}

	protected function _unserializeParams($params) {
		if (empty($params)) {
			return array();
		}
		$p = explode('|', $params);
		$out = array();
		foreach ($p as $e) {
			$res = explode(':', $e);
			$out[$res[0]] = $res[1];
		}
		return $out;
	}

	protected function _serializeParams($params) {
		$res = '';
		foreach ($params as $k => $v) {
			$res .= "$k:$v|";
		}
		return $res;
	}

/****************************************************************************************
 * ADMIN functions
 ****************************************************************************************/


	/**
	 * @return void
	 */
	public function admin_index() {
		$this->Addon->recursive = 0;
		$addons = $this->paginate();
		$this->set(compact('addons'));
	}

	/**
	 * @return void
	 */
	public function admin_view($id = null) {
		if (empty($id) || !($addon = $this->Addon->find('first', array('conditions'=>array('Addon.id'=>$id))))) {
			$this->Common->flashMessage(__('invalidRecord'), 'error');
			$this->Common->autoRedirect(array('action' => 'index'));
		}
		$this->set(compact('addon'));
	}

	/**
	 * @return void
	 */
	public function admin_add() {
		if ($this->Common->isPosted()) {
			$this->Addon->create();
			if ($this->Addon->save($this->request->data)) {
				$var = $this->request->data['Addon']['name'];
				$this->Common->flashMessage(__('record add %s saved', h($var)), 'success');
				$this->Common->postRedirect(array('action' => 'index'));
			} else {
				$this->Common->flashMessage(__('formContainsErrors'), 'error');
			}
		}

	}

	/**
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (empty($id) || !($addon = $this->Addon->find('first', array('conditions'=>array('Addon.id'=>$id))))) {
			$this->Common->flashMessage(__('invalidRecord'), 'error');
			$this->Common->autoRedirect(array('action' => 'index'));
		}
		if ($this->Common->isPosted()) {
			if ($this->Addon->save($this->request->data)) {
				$var = $this->request->data['Addon']['name'];
				$this->Common->flashMessage(__('record edit %s saved', h($var)), 'success');
				$this->Common->postRedirect(array('action' => 'index'));
			} else {
				$this->Common->flashMessage(__('formContainsErrors'), 'error');
			}
		} else {
			$this->request->data = $addon;
		}
	}

	/**
	 * @throws MethodNotAllowedException
	 * @return void
	 * @throws NotFoundException
	 * @throws MethodNotAllowedException
	 */
	public function admin_delete($id = null) {
		$this->request->onlyAllow('post', 'delete');
		if (empty($id) || !($addon = $this->Addon->find('first', array('conditions'=>array('Addon.id'=>$id), 'fields'=>array('id', 'name'))))) {
			$this->Common->flashMessage(__('invalidRecord'), 'error');
			$this->Common->autoRedirect(array('action'=>'index'));
		}
		$var = $addon['Addon']['name'];

		if ($this->Addon->delete($id)) {
			$this->Common->flashMessage(__('record del %s done', h($var)), 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Common->flashMessage(__('record del %s not done exception', h($var)), 'error');
		$this->Common->autoRedirect(array('action' => 'index'));
	}

/****************************************************************************************
 * protected/interal functions
 ****************************************************************************************/


/****************************************************************************************
 * deprecated/test functions
 ****************************************************************************************/
}
