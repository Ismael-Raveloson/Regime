<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class FrontController extends CI_Controller
    {
        public function profil(){
            $this->load->model('FrontOfficeModel');
            $data= array();
            $data['category']=$this->FrontOfficeModel->getObjectif();
            $this->load->view('page/front/profil',$data);
        }

        public function insertProfil(){
            $this->load->model('FrontOfficeModel');
            $poids= $this->input->post('poids');
            $taille= $this->input->post('taille');
            $genre= $this->input->post('genre');
            $objectif= $this->input->post('objectif');

            $idUtilisateur=2;
            $this->FrontOfficeModel->insertProfil($idUtilisateur,$objectif,$genre,$taille,$poids);

        }
    }

?>