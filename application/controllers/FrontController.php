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
                var_dump($name);
                var_dump($first_name);
                var_dump($email);
                var_dump($password);
                var_dump($confirm_password);
                var_dump($birthday);
                $this->load->model('FrontOfficeModel');
                $this->FrontOfficeModel->insert_user($name,$first_name,$birthday,$email,$password);
                redirect('FrontController/inscription');  
            }    
        }


        public function sign_up_treat() 
        {
            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $this->load->model('FrontOfficeModel');

            $login = $this->FrontOfficeModel->cheak_user($email,$password);

            if (is_null($login)) 
            {
                redirect('FrontController/index');
            }
            
            else 
            {
                $this->load->view('page/front/home');
            }
        }
    }

?>