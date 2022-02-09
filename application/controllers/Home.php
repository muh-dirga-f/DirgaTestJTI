<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('access_token')) {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view('home/input_view');
    }

    public function output()
    {
        $this->load->view('home/output_view');
    }
}
