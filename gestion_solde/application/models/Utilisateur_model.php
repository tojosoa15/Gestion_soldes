<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model {

    public function inscription($data) {
        $this->db->insert('utilisateurs', $data);
    }

}