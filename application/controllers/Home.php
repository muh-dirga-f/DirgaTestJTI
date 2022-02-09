<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('access_token')) {
            $this->load->view('home/input_view');
        } else {
            redirect('login');
        }
    }

    public function output()
    {
        if ($this->session->userdata('access_token')) {
            $this->load->view('home/output_view');
        } else {
            redirect('login');
        }
    }
}
