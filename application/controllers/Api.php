<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
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

    public function kontak_ganjil_get()
    {
        $kontak = $this->db->get('kontak')->result_array();

        $hasil = array();
        foreach ($kontak as $key => $value) {
            $no_hp = $this->encryption->decrypt($kontak[$key]['nomor_hp']);
            if (($no_hp % 2) == 1) {
                $object = new stdClass();
                $object->id_kontak = $kontak[$key]['id_kontak'];
                $object->nomor_hp = $no_hp;
                $object->provider = $this->encryption->decrypt($kontak[$key]['provider']);
                //masukkan object kedalam array $hasil
                $hasil[] = $object;
            }
        }
        if ($kontak) {
            // Set the response and exit
            $this->response([
                'status' => true,
                'data' => $hasil,
            ], 200);
        } else {
            // Set the response and exit
            $this->response([
                'status' => false,
                'message' => 'Tidak ada kontak yang ditemukan'
            ], 404);
        }
    }
    public function kontak_genap_get()
    {
        $kontak = $this->db->get('kontak')->result_array();

        $hasil = array();
        foreach ($kontak as $key => $value) {
            $no_hp = $this->encryption->decrypt($kontak[$key]['nomor_hp']);
            if (($no_hp % 2) == 0) {
                $object = new stdClass();
                $object->id_kontak = $kontak[$key]['id_kontak'];
                $object->nomor_hp = $no_hp;
                $object->provider = $this->encryption->decrypt($kontak[$key]['provider']);
                //masukkan object kedalam array $hasil
                $hasil[] = $object;
            }
        }
        if ($kontak) {
            // Set the response and exit
            $this->response([
                'status' => true,
                'data' => $hasil,
            ], 200);
        } else {
            // Set the response and exit
            $this->response([
                'status' => false,
                'message' => 'Tidak ada kontak yang ditemukan'
            ], 404);
        }
    }

    public function kontak_post()
    {
        $data = [
            'id_kontak' => '',
            'nomor_hp' => $this->encryption->encrypt($this->post('nomor_hp')),
            'provider' => $this->encryption->encrypt($this->post('provider')),
        ];

        $insert = $this->db->insert('kontak', $data);

        if ($insert) {
            $this->response([
                'status' => true,
                'message' => 'Kontak berhasil ditambahkan'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kontak gagal ditambahkan'
            ], 404);
        }
    }
}
