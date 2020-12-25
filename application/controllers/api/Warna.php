<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Warna extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {
        $wahyuLoveIqbal = $this->db->query('SELECT * FROM tb_warna')->result_array();

        if ($wahyuLoveIqbal) {
            $this->response([
                'status' => true,
                'data' => $wahyuLoveIqbal,
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'messages' => "Data Kosong",
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
