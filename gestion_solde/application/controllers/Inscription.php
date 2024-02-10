<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('utilisateur_model');
    }

    public function index() {
        $this->load->view('inscription');
    }

    public function inscription_utilisateur() {
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[utilisateurs.email]');
        $this->form_validation->set_rules('mot_de_passe', 'Mot de passe', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('inscription');
        } else {
            $data = array(
                'nom' => $this->input->post('nom'),
                'email' => $this->input->post('email'),
                'mot_de_passe' => password_hash($this->input->post('mot_de_passe'), PASSWORD_DEFAULT)
            );

            $this->utilisateur_model->inscription($data);
            redirect('connexion');
        }
    }
}
