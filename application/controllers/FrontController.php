<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class FrontController extends CI_Controller
    {
        public function index()
        {
            $this->load->view('page/front/index');
        }

        public function inscription()
        {
            $this->load->view('page/front/inscription');
        }

        public function inscription_treat() 
        {
            $this->load->library('session');
            
            $name = $this->input->post("name");
            $first_name = $this->input->post("first_name");
            $birthday = $this->input->post("birthday");
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            $confirm_password = $this->input->post("confirm_password");

            if ($password != $confirm_password) 
            {
                redirect('FrontController/inscription');  
            } 
            else 
            {    
                $this->load->model('FrontOfficeModel');
                $this->FrontOfficeModel->insert_user($name,$first_name,$birthday,$email,$password);
                redirect('FrontController/index');  
            }    
        }


        public function sign_up_treat() 
        {
            $this->load->library('session');



            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $this->load->model('FrontOfficeModel');

            $login = $this->FrontOfficeModel->cheak_user($email,$password);

            var_dump($login['estAdmin']);
            if (is_null($login)) 
            {
                redirect('FrontController/index');
            }
            else 
            {
                $this->session->set_userdata('idclient',$login);
                
                if ($login['estAdmin'] == 1) 
                {
                    redirect('BackController/index');
                }
                else 
                {
                    redirect('FrontController/profil');
                }
                
            }
        }

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
            redirect('FrontController/home');
        }

        public function home()
        {
            $this->load->model('FrontOfficeModel');
            $data['regime'] = $this->FrontOfficeModel->getRegime();
            $this->load->view('page/front/home',$data);
        }

        public function portfeuille()
        {
            $data = array();
            $this->load->model('FrontOfficeModel');
            $data['code'] = $this->FrontOfficeModel->select_code();
            $id = $this->session->userdata('idclient');
            $i = $id['idUtilisateur'];
            $data['vola'] = $this->FrontOfficeModel->getMontantUtil($i);
            $this->load->view('page/front/portfeuille',$data);
        }
        
        public function listplat()
        {
            $data = array();
            $this->load->model('FrontOfficeModel');
            $id= $this->input->get("idRegime");
            $data['regime'] = $this->FrontOfficeModel->getDetail_regime($id);
            $this->load->view('page/front/listplat',$data);
        }

        public function listcode_treat()
        {
            $code = $this->input->post("code");
            $id = $this->session->userdata('idclient');
            $i = $id['idUtilisateur'];
            $this->load->model('FrontOfficeModel');

            $selectcode = $this->FrontOfficeModel->check_code($code);

            $idcode = $selectcode['idCode'];
            
            
            if (is_null($selectcode)) 
            {
                redirect('FrontController/portfeuille');
            } else 
            {
                $this->FrontOfficeModel->insert_code_user($idcode,$i);
                redirect('FrontController/home');
            }
        }

        public function log_out()
        {
            $this->session->sess_destroy();

            redirect('FrontController/index');
        }

        public function panier()
        {
            $data = array();
            $this->load->model('FrontOfficeModel');
            $id = $this->session->userdata('idclient');
            $i = $id['idUtilisateur'];
            $data['panier'] = $this->FrontOfficeModel->getListePanier($i);
            $this->load->view('page/front/panier',$data);
        }

        public function ajoutPanier(){
            $this->load->model('FrontOfficeModel');
            $idRegime = $this->input->get('idRegime');
            $id = $this->session->userdata('idclient');
            $i = $id['idUtilisateur'];
            $this->FrontOfficeModel->ajouterPanier($idRegime,$i);
            redirect('FrontController/home');
        }
    }

?>