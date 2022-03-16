<?php

class User_model extends CI_Model
{
    public function userlogin($identifiant,$mdp) {
        $this->db->select('identifiant,mdp');
        $this->db->from('collectionneur');
        $this->db->where('identifiant', $identifiant);
        $this->db->where('mdp', $mdp);
        $query=$this->db->get();

        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    
        
}
 
?>