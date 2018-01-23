<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();

        $this->load->model('Tickets_model');
        $this->load->model('Technicians_model');

    }

    public function index()
    {
        $data['tickets'] = $this->Tickets_model->recuperer_tickets();
        $this->load->view('head');
        $this->load->view('tickets/view', $data);
        $this->load->view('script');
    }

    public function edit()
    {
        $this->load->view('head');
        $this->load->view('tickets/edit');
        $this->load->view('script');
    }

    public function new_ticket()
    {
        $signal   = $this->input->post('nom').' '.$this->input->post('prenom');
        $objet   = $this->input->post('objet');
        $description   = $this->input->post('description');
        $priorite   = $this->input->post('priorite');
        $urgence   = $this->input->post('urgence');

        //Choix du technicien en assignation selon les compétences
        $id_technicien = '';
        $recherche = $description.$objet;
        //Get all tech
        $techniciens = $this->Technicians_model->recuperer_techniciens();
        //pour chaque tech chercher les mots qui match dans la description
        foreach($techniciens as $technicien){
            $competences = explode(",", $technicien['competences']);
            if($this->match($competences, $recherche)){
               $id_technicien = $technicien['id_technicien'];
               break;
            }
        }
        if ($id_technicien == ''){
          $random_key=array_rand($techniciens,1);
          $id_technicien = $techniciens[$random_key]['id_technicien'];
        }
        //Si un mot match l'attribuer au technicien et break
        //Sinon l'attribuer à un technicien random


        $this->Tickets_model->creer_ticket($signal, $objet, $description, $priorite, $urgence, $id_technicien);
        $this->session->set_flashdata('message-success', '<strong>Ticket crée.</strong> Vous pouvez consulter le ticket dans la liste ci-dessous');
        redirect(base_url('tickets'));
    }

    private function match($needles, $haystack)
    {
        foreach($needles as $needle){
            if (strpos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

}
