<?php
/**
 * Created by PhpStorm.
 * User: Ravuthz
 * Date: 12/7/2016
 * Time: 2:39 PM
 */

require(APPPATH . 'libraries/REST_Controller.php');

class Notes extends REST_Controller {

    function index_get() {
        $data = $this->_content('get', $this->get('id'));
        $this->response($data);
    }

    function index_post() {
        $data = $this->_content('post', $this->post('id'));
        $this->response($data);
    }

    function index_put() {
        $data = $this->_content('put', $this->put('id'));
        $this->response($data);
    }

    function index_delete() {
        $data = $this->_content('delete', $this->delete('id'));
        $this->response($data);
    }

    private function _content($action, $id) {
        return array(
            'controller' => 'Notes',
            'action' => $action,
            'id' => $id
        );
    }
}