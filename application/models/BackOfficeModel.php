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


        
    }
?>