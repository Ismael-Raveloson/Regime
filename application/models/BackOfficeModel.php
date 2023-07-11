<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class BackOfficeModel extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }


        public function select_plat()
        {
            $sql = "SELECT * FROM PLAT";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
        }

        public function select_objectif()
        {
            $sql = "SELECT * FROM OBJECTIF";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
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