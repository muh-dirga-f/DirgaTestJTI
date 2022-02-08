<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->encryption->initialize(
            array(
                'driver' => 'openssl',
                'cipher' => 'aes-256',
                'mode' => 'cbc',
                'key' => 'NamaSayaDirga123NamaSayaDirga123'
            )
        );
    }

    public function index()
    {
        $this->load->view('home/input_view');
        
        //tes enkripsi
        $plain_text = 'This is a plain-text message!';
        echo $ciphertext = $this->encryption->encrypt($plain_text);
    }

    public function output()
    {
        $this->load->library('encryption');
        $this->load->view('home/output_view');
        
        //tes dekripsi
        echo $this->encryption->decrypt('379f89210a6a8223ecd8be00a2d5d22417af2e212c6df1347a7c568b725e4763cf05e3882c9264b3dc253140702c32bcd17faa01e6f5c337363b555368c4805fvvNCIsNUHrsBpqd6qpbiSI7by91izy6a6QSBmQ4HrmjHoYiHrpgDL34qN/yyJgOZ');
    }

    public function sender()
    {
        $this->load->view('home/sender_view');
    }
}
