<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/input_view');
    }

    public function output()
    {
        $this->load->view('home/output_view');
    }

    public function sender()
    {
        $this->load->view('home/sender_view');
    }
}