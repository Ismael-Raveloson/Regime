<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class BackController extends CI_Controller
    {
        public function index()
        {

            $this->load->view('page/back/admin');
        }

        public function charte(){
            $this->load->view('page/back/charte');
        }

        public function insert()
        {
            $data = array();
            $this->load->model('BackOfficeModel');
            $data['plat'] = $this->BackOfficeModel->select_plat();
            $data['objectif'] = $this->BackOfficeModel->select_objectif();
            $this->load->view('page/back/crud.php',$data);
        }

        public function code(){
            $data = array();
            $this->load->model('FrontOfficeModel');
            $data['code'] = $this->FrontOfficeModel->select_code();
            $this->load->view('page/back/code.php',$data);
        }




    }
    
?>
