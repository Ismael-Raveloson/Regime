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
        
        
        public function check_code($nomCode)
        {
            $sql = "SELECT * FROM CODE WHERE NOMCODE = %s ";

            $sprintf = sprintf($sql , $this->db->escape($nomCode));

            $query = $this->db->query($sprintf);

            $num = $query->num_rows();
            $answer = false;

            if ($num >=1) 
            {
                $answer = true;
            }
            
            return $answer;
        }


        public function insert_code_user($code,$idUtilisateur) 
        {
            if ($this->check_code($code) == true) 
            {
                $sql = "INSERT INTO CODE_UTILISATEUR VALUES(%d,%d)";

                $sprintf = sprintf($sql,$code,$idUtilisateur);
                
                $this->db->query($sprintf);    
            }
            
        }

        public function search_code($nomCode)
        {
            $sql = "SELECT IDCODE FROM CODE WHERE NOMCODE = %s";
            $sprintf = sprintf($sql, $this->db->escape($nomCode));

            $query = $this->db->query($sprintf);
            $query_result = $query->row();
            
            if ($query_result) 
            {
                return intval($query_result->IDCODE); // Retourne uniquement la valeur de la colonne IDCODE
            } 
            else 
            {
                return null; // Ou une autre valeur par défaut si aucun résultat n'est trouvé
            }
        }

        

    }
?>