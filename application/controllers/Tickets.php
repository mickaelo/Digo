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

        $this->Tickets_model->creer_ticket($signal, $objet, $description, $priorite, $urgence);

        redirect(base_url('tickets'));
    }

}
