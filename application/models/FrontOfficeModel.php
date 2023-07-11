<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class FrontOfficeModel extends CI_Model{
        function __construct() {
            parent::__construct();
            $this->load->database();
        }


        public function insert_user($nom,$prenom,$dtn,$email,$mdp) 
        {
            $sql = "INSERT INTO utilisateur VALUES(NULL,%s,%s,%s,%s,%s,0)";

            $sprintf = sprintf($sql, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($dtn), $this->db->escape($email), $this->db->escape($mdp));

            $query = $this->db->query($sprintf);
        }


        public function cheak_user($email,$password)
        {
            $sql = "SELECT * FROM utilisateur WHERE EMAIL = %s AND MDP = %s";

            $sprintf = sprintf($sql, $this->db->escape($email), $this->db->escape($password));
            $query = $this->db->query($sprintf);
            $query_result = $query->row_array();
            
            return $query_result;
        }
        
        function getObjectif(){
            $sql= "SELECT * FROM objectif";
            $query= $this->db->query($sql);
            $data= array();
            foreach($query->result_array() as $row){
                $data[]=$row;
            }
            return $data;
        }

        function getListePanier($client){
            $sql = "SELECT r.idRegime ,r.nomRegime , p.dateVente , r.duree , r.variation, r.prix FROM panier p JOIN regime r ON p.idRegime = r.idRegime JOIN objectif o ON r.idObjectif = o.idObjectif WHERE idUtilisateur = %s ";
            $req = sprintf($sql,$this->db->escape($client));
            $query= $this->db->query($req);
            $data= array();
            foreach($query->result_array() as $row){
                $data[]=$row;
            }
            return $data;
        }

        function insertProfil($utilisateur,$objectif,$genre,$taille,$poids){
            $sql="INSERT INTO profil(idUtilisateur,idObjectif,genre,taille,poids,montantPortefeuille) VALUES (%d,%d,%s,%d,%d,0)";
            $req= sprintf($sql,$utilisateur,$objectif,$this->db->escape($genre),$taille,$poids);
            $this->db->query($req);
        }
        
        function getRegime(){
            $sql = "SELECT * FROM regime r JOIN objectif o ON o.idObjectif = r.idObjectif ORDER BY r.idObjectif ASC";
            $query=$this->db->query($sql);
            $data= array();
            foreach($query->result_array() as $row){
                $data[]=$row;
            }
            return $data;
        }

        
        public function check_code($nomCode)
        {
            $sql = "SELECT * FROM code WHERE NOMCODE = '".$nomCode."' ";

            $query = $this->db->query($sql);
            $query_result = $query->row_array();

            return $query_result;
            
        }


        public function insert_code_user($code,$idUtilisateur) 
        {

            $sql = "INSERT INTO code_utilisateur VALUES(".$code.",".$idUtilisateur.")";
            $this->db->query($sql);
        }

        public function search_code($nomCode)
        {
            $sql = "SELECT IDCODE FROM code WHERE NOMCODE = %s";
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
            $sql = "SELECT * FROM code";

            $query = $this->db->query($sql);
            $query_result = $query->result_array();

            return $query_result;
        }

        public function getDetail_regime($idRegime){
            $sql= "SELECT p.nomPlat,p.photoPlat,p.prix,o.nomObjectif FROM composition_regime AS co JOIN plat p ON p.idPlat=co.idPlat JOIN objectif o ON o.idObjectif=p.idObjectif WHERE idRegime=%d";
            $query= sprintf($sql,$idRegime);
            $result= $this->db->query($query);
            $tab= array();

            foreach($result->result_array() as $row){
                $tab[]= $row;
            }
            return $tab;

        }
        public function getMontantUtil($id){
            $sql = "SELECT montantPortefeuille FROM profil WHERE idUtilisateur = %d";
        }
        

    }
?>