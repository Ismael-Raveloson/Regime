<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class FrontOfficeModel extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
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
        
    }
?>