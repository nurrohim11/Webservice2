<?php

require APPPATH . '/libraries/REST_Controller.php';

class Jurusan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data mahasiswa
    function index_get() {
    	$jurusan = $this->db->get('jurusan')->result();
        $this->response($jurusan, 200);
    }

}