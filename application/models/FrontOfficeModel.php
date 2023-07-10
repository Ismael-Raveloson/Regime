<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class FrontOfficeModel extends CI_Model
    {
        
        function __construct() {
            parent::__construct();
            $this->load->database();
        }


        public function insert_user($nom,$prenom,$dtn,$email,$mdp) 
        {
            $sql = "INSERT INTO UTILISATEUR VALUES(NULL,%s,%s,%s,%s,%s,0)";

            $sprintf = sprintf($sql, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($dtn), $this->db->escape($email), $this->db->escape($mdp));

            $query = $this->db->query($sprintf);
        }


        public function cheak_user($email,$password)
        {
            $sql = "SELECT * FROM UTILISATEUR WHERE EMAIL = %s AND MDP = %s";

            $sprintf = sprintf($sql, $this->db->escape($email), $this->db->escape($password));
            $query = $this->db->query($sprintf);
            $query_result = $query->row_array();
            
            return $query_result;

        }
        
    }
?>