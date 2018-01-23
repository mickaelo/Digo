<?php
/**
 * Created by PhpStorm.
 * User: albateur
 * Date: 06/05/2015
 * Time: 13:56
 */

class Tickets_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function recuperer_tickets()
    {
        $this->db->select('*')
            ->from('tickets')
            ->join('techniciens', 'tickets.id_technicien = techniciens.id_technicien');

        $query = $this->db->get()->result_array();
        return $query;
    }

    public function creer_ticket($signal, $objet, $description, $priorite, $urgence, $id_technicien)
    {
        $data = array(
            'signale_par'=>$signal,
            'objet'=>$objet,
            'description'=>$description,
            'priorite'=>$priorite,
            'urgence'=>$urgence,
            'id_technicien'=>$id_technicien
        );
        $this->db->insert('tickets', $data);
    }
}
