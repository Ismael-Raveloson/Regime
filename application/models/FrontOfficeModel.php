<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class FrontOfficeModel extends CI_Model{
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
        
        function getObjectif(){
            $sql= "SELECT * FROM OBJECTIF";
            $query= $this->db->query($sql);
            $data= array();
            foreach($query->result_array() as $row){
                $data[]=$row;
            }
            return $data;
        }

        function insertProfil($utilisateur,$objectif,$genre,$taille,$poids){
            $sql="INSERT INTO PROFIL(idUtilisateur,idObjectif,genre,taille,poids,montantPortefeuille) VALUES (%d,%d,%s,%d,%d,0)";
            $req= sprintf($sql,$utilisateur,$objectif,$this->db->escape($genre),$taille,$poids);
            $this->db->query($req);
        }
        
        function getRegime(){
            $sql = "SELECT * FROM REGIME r JOIN OBJECTIF o ON o.idObjectif = r.idObjectif ORDER BY r.idObjectif ASC";
            $query=$this->db->query($sql);
            $data= array();
            foreach($query->result_array() as $row){
                $data[]=$row;
            }
            return $data;
        }

        
        public function check_code($nomCode)
        {
            $sql = "SELECT * FROM CODE WHERE NOMCODE = '".$nomCode."' ";

            $query = $this->db->query($sql);
            $query_result = $query->row_array();

            return $query_result;
            
        }


        public function insert_code_user($code,$idUtilisateur) 
        {

            $sql = "INSERT INTO CODE_UTILISATEUR VALUES(".$code.",".$idUtilisateur.")";
            $this->db->query($sql);
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


        public function select_code()
        {
            $sql = "SELECT * FROM CODE";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
        }

        

    }
?>