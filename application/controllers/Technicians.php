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

    public function details()
    {
        $this->load->view('head');
        $this->load->view('technicians/details');
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

        $this->Technicians_model->creer_technicien($nom, $prenom, $email, $competences);

        redirect(base_url('technicians'));
    }
}
