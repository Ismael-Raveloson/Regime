<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class BackOfficeModel extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }


        public function select_plat()
        {
            $sql = "SELECT * FROM plat";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
        }

        public function select_objectif()
        {
            $sql = "SELECT * FROM objectif";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
        }

        public function getMontantCode($idCode){
            $sql = "SELECT montant FROM code_utilisateur cu JOIN code c ON c.idCode = cu.idCode WHERE cu.idCodeUtilisateur = %d";
            $req = sprintf($sql,$idCode);
            $query = $this->db->query($sprintf);
            $query_result = $query->row();
            return $query_result;
        }

        public function getCode($idCodeUtil){
            $sql = "SELECT idCode FROM code_utilisateur cu JOIN code c ON c.idCode = cu.idCode WHERE cu.idCodeUtilisateur = %d";
            $req = sprintf($sql,$idCodeUtil);
            $query = $this->db->query($sprintf);
            $query_result = $query->row();
            return $query_result;
        }

        public function validerCode($idCodeUtil){
            $id = $this->getCode($idCodeUtil);
            $sql = "UPDATE code SET validite = 1 WHERE idCode = %d ";
            $req = sprintf($sql,$id);
            $this->db->query($req);    
        }

        public function deleteCode($idCodeUtil){
            $sql = "DELETE FROM code_utilisateur WHERE idCodeUtilisateur = %d";
            $req = sprintf($sql,$idCodeUtil);
            $this->db->query($req);    
        }


        public function insert_regime($objectif,$duree,$variation,$prix,$nomregime)
        {
            $sql = "INSERT INTO regime VALUES(null,".$objectif.",".$duree.",".$variation.",".$prix.",'".$nomregime."')";
            $this->db->query($sql);
        }


        public function select_code()
        {
            $sql = "SELECT code.nomcode,code.montant,utilisateur.prenom FROM code_utilisateur join code on code.idcode = code_utilisateur.idcode join utilisateur on utilisateur.idUtilisateur = code_utilisateur.idUtilisateur";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
        }

        public function insert_plat($idObjectif,$nomPlat,$photoPlat,$prix)
        {
            $sql = "INSERT INTO plat VALUES(null,'".$idObjectif."','".$nomPlat."','".$photoPlat."',".$prix.")";
            $this->db->query($sql);
        }
    }
?>