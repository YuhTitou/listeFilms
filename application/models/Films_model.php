<?php
    class Films_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function getFilms5(){
            $this->db->select('idimdb,title,release,overview,poster');
            $this->db->from('movie');
            $this->db->order_by('release');
            $this->db->limit(5);
            $query=$this->db->get();
            return $query->result_array();
        }

        public function getAllFilms(){
            $this->db->select('idimdb,title,release,overview,poster');
            $this->db->from('movie');
            $this->db->order_by('release','desc');
            $query=$this->db->get();
            return $query->result_array();
        }

        public function getUserFilms($identifiant){
            $this->db->select('idimdb,title,release,overview,poster');
            $this->db->from('collection');
            $this->db->join('movie', 'idimdb');
            $this->db->where('idcollectionneur',$identifiant);
            $this->db->order_by('release');
            $this->db->limit(5);
            $query=$this->db->get();
            return $query->result_array();
        }

        public function ajoutCollection($identifiant,$idfilm){
            $data=array(
                'idcollectionneur'=>$identifiant,
                'idimdb'=>$idfilm
            );
            return $this->db->insert('collection',$data);
        }
    }

?>