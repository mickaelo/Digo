<?php
/**
 * Created by PhpStorm.
 * User: albateur
 * Date: 06/05/2015
 * Time: 13:56
 */

class Technicians_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function recuperer_techniciens()
    {
        $this->db->select('*')
            ->from('techniciens');

        $query = $this->db->get()->result_array();
        return $query;
    }

    public function creer_technicien($nom, $prenom, $email, $competences)
    {
        $data = array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'competences'=>$competences
        );
        $this->db->insert('techniciens', $data);
    }
}