<?php
class Controleur_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_collectionneurs(){
        $this->db->select('identifiant,nom,prenom');
        $this->db->from('collectionneur');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function add_collectionneur($identifiant,$nom,$prenom,$mdp){
        $data=array(
            'identifiant'=>$identifiant,
            'nom'=>$nom,
            'prenom'=>$prenom,
            'mdp'=>$mdp
            );
        return $this->db->insert('collectionneur',$data);
    }

    public function supprColl($identifiant){
        $data=array('identifiant' => $identifiant);
        $data2=array('idcollectionneur'=>$identifiant);
        return $this->db->delete('collectionneur',$data) && $this->db->delete('collection',$data2);
    }
}
?>