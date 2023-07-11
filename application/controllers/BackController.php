<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class BackController extends CI_Controller
    {
        public function index(){
            $this->load->view('page/back/admin');
        }

        public function charte(){
            $this->load->view('page/back/charte');
        }

        public function insert(){
            $this->load->view('page/back/crud.php');
        }

        public function code(){
            $this->load->view('page/back/code.php');
        }










    }
    
?>
