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
            $this->load->model('BackOfficeModel');
            $data['code'] = $this->BackOfficeModel->select_code();
            $this->load->view('page/back/code.php',$data);
        }

        public function insertSport(){
            $this->load->model('BackOfficeModel');
            $nom = $this->input->get("nom");
            $objectif = $this->input->get("objectif");
            $this->BackOfficeModel->insert_sport($nom,$objectif);
            redirect('BackController/insert');
        }

        public function regime_treat()
        {
            $nom = $this->input->post("nom");
            $duree = $this->input->post("duree");
            $variation = $this->input->post("variation");
            $objectif = $this->input->post("objectif");
            $plat = $this->input->post("plat");

            
            var_dump($nom);
            var_dump($duree);
            var_dump($variation);
            var_dump($objectif);
            var_dump($plat);
            //redirect('BackController/index');
        }

        public function plat_treat()
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
        
            $this->load->library('upload', $config);
        
            $nomplat = $this->input->post("nom");
            $prix = $this->input->post("prix");
            $objectif = $this->input->post("objectif_plat");
        
            if (!$this->upload->do_upload('photo')) 
            {
                $error = $this->upload->display_errors();
                var_dump($error);
            } 
            else 
            {
                $uploadData = $this->upload->data();
                $photo = $uploadData['file_name'];
        
                $data = array(
                    'objectif' => $objectif,
                    'nom_plat' => $nomplat,
                    'img_plat' => $photo,
                    'prix_plat' => $prix,
                );
        
                $this->load->model('BackOfficeModel');
                $this->BackOfficeModel->insert_plat($objectif, $nomplat, $photo, $prix);   
        
                redirect('BackController/insert');
            }
        }

        public function deleteCode(){
            $this->load->model('BackOfficeModel');
            $idCode = $this->input->get('idCode');
            $this->BackOfficeModel->deleteCode($idCode);
            redirect('BackController/code');
        }
        
        public function validerCode(){
            $this->load->model('BackOfficeModel');
            $idCode = $this->input->get('idCode');
            $this->BackOfficeModel->validerCode($idCode);
            redirect('BackController/code');
        }
        


    }
    
?>
