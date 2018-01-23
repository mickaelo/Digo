<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technicians extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
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

        $this->load->model('Technicians_model');

    }

    public function index()
    {
        $data['technicians'] = $this->Technicians_model->recuperer_techniciens();
        $this->load->view('head');
        $this->load->view('technicians/view', $data);
        $this->load->view('script');
    }

    public function details($id)
    {
        $data['technician'] = $this->Technicians_model->detail_technicien($id);
        $data['tickets_technician'] = $this->Technicians_model->detail_ticket_technicien($id);
        $this->load->view('head');
        $this->load->view('technicians/details', $data);
        $this->load->view('script');
    }

    public function edit()
    {
        $this->load->view('head');
        $this->load->view('technicians/edit');
        $this->load->view('script');
    }

    public function new_technician()
    {
        $nom   = $this->input->post('nom');
        $prenom   = $this->input->post('prenom');
        $email   = $this->input->post('email');
        $competences   = $this->input->post('competences');
        $array_competences = '';
        $count = 0;
        foreach($competences as $competence){
            if ($count != 0){
              $array_competences .= ','.$competence;
            } else {
              $array_competences .= $competence;
            }
            $count++;
        }
        $this->Technicians_model->creer_technicien($nom, $prenom, $email, $array_competences);

        $this->session->set_flashdata('message-success', '<strong>Technician crée.</strong> Vous pouvez consulter les techniciens dans la liste ci-dessous');

        redirect(base_url('technicians'));
    }
}
