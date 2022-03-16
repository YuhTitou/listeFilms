<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Films extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('films_model');
        $this->load->model('controleur_model');
        $this->load->helper('url');
    }

    public function index(){
        $data['filmslist']=$this->films_model->getFilms5();
        $data['content']='main';
        $data['title']='Films';
        $this->load->vars($data );
        $this->load->view('template');

    }

    public function allfilms(){
        $data['filmslist']=$this->films_model->getAllFilms();
        $data['content']='main';
        $data['title']='Films';
        $this->load->vars($data );
        $this->load->view('template');
    }

    public function allfilmslog(){
        $data['filmslist']=$this->films_model->getAllFilms();
        $data['content']='mainlog';
        $data['title']='Films';
        $this->load->vars($data );
        $this->load->view('templatelog');
    }

    public function connexion(){
        $this->load->library('form_validation');
        $data['content']='connexion';
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('identifiant','Identifiant','required');
        $this->form_validation->set_rules('mdp','Mot de passe','required');
        if($this->form_validation->run()){
            $identifiant=$this->input->post('identifiant');
            $mdp=$this->input->post('mdp');
            $this->load->model('user_model');
            if($this->user_model->userlogin($identifiant,$mdp)){
                $session_data=array('identifiant' => $identifiant);
                $this->session->set_userdata($session_data);
                //redirect ('http://localhost:8080/index.php/films/compte');
                $this->compte();
            }
            else{
                $this->session->set_flashdata('error','Mauvais identifiant ou mot de passe');
                //redirect ('http://localhost:8080/index.php/films/connexion');
                $this->connexion();
            }
        }
       
    }
    
    public function compte(){
        if($this->session->userdata('identifiant') == 'admin'){
            //rediriger vers page controle
            $this->allcollectionneurs();
        }else if($this->session->userdata('identifiant') != ''){
            $data['filmslist']=$this->films_model->getUserFilms($this->session->userdata('identifiant'));
            $data['content']='mainlog';
            $data['title']='Films';
            $this->load->vars($data);
            $this->load->view('templatelog');
        }
        else{
            //redirect ('http://localhost:8080/index.php');
            $this->index();
        }
    }

    public function logout(){
        $this->session->unset_userdata('identifiant');
        //redirect (base_url() . 'films/connexion');
        $this->connexion();
    }

    public function create(){ 
        /*$this->load->helper('inscription');*/
        $this->load->library('form_validation');
        $this->form_validation->set_rules('identifiant','Identifiant','required');
        $this->form_validation->set_rules('nom','Nom','required');
        $this->form_validation->set_rules('prenom','Prenom','required');
        $this->form_validation->set_rules('mdp','Mot de passe','required');
        if($this->form_validation->run()===FALSE){
            $data['content']='register';
            $this->load->vars($data);
            $this->load->view('template');
        }else{
            $identifiant=$this->input->post('identifiant');
            $nom=$this->input->post('nom');
            $prenom=$this->input->post('prenom');
            $mdp=$this->input->post('mdp');
            $this->controleur_model->add_collectionneur($identifiant,$nom,$prenom,$mdp);
            $data['filmslist']=$this->films_model->getAllFilms();
            $data['content']='mainlog';
            $data['title']='Films';
            $this->load->vars($data);
            $this->load->view('templatelog');
        }
        
    }
    
    public function gererFilms($idfilm){
        $id=$this->session->userdata('identifiant');
        $this->load->model('films_model');
        
        $this->films_model->ajoutCollection($id,$idfilm);
        $this->compte();
    }

    public function supprimeColl($id){
        $this->load->model('controleur_model');
        $this->controleur_model->supprColl($id);
        $this->allcollectionneurs();
    }
    
    public function allcollectionneurs(){
        $data['collectionneurlist']=$this->controleur_model->get_collectionneurs();
        $data['content']='mainadmin';
        $data['title']='Gerer collectionneurs';
        $this->load->vars($data);
        $this->load->view('templateadmin');
        
    }
    


}