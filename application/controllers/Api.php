<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->output->set_header( "Access-Control-Allow-Origin: *" );
        $this->output->set_header( "Access-Control-Allow-Credentials: true" );
        $this->output->set_header( "Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS" );
        $this->output->set_header( "Access-Control-Max-Age: 604800" );
        $this->output->set_header( "Access-Control-Request-Headers: x-requested-with" );
        $this->output->set_header( "Access-Control-Allow-Headers: x-requested-with, x-requested-by" );

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



    public function kontak_find_get()
    {
        $id = $this->get('id');
        $kontak = $this->db->get_where('kontak', ['id_kontak' => $id])->result_array();

        $hasil = array();
        foreach ($kontak as $key => $value) {
            $object = new stdClass();
            $object->id_kontak = $kontak[$key]['id_kontak'];
            $object->nomor_hp = $this->encryption->decrypt($kontak[$key]['nomor_hp']);
            $object->provider = $this->encryption->decrypt($kontak[$key]['provider']);
            //masukkan object kedalam array $hasil
            $hasil[] = $object;
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

    public function kontak_ganjil_get()
    {
        $kontak = $this->db->get('kontak')->result_array();

        $hasil = array();
        foreach ($kontak as $key => $value) {
            $no_hp = $this->encryption->decrypt($kontak[$key]['nomor_hp']);
            if (((int)$no_hp % 2) == 1) {
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
            if (((int)$no_hp % 2) == 0) {
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

    public function kontak_simpan_post()
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

    public function kontak_update_post()
    {
        $id = $this->post('id_kontak');
        $data = [
            'nomor_hp' => $this->encryption->encrypt($this->post('nomor_hp')),
            'provider' => $this->encryption->encrypt($this->post('provider')),
        ];

        $update = $this->db->update('kontak', $data, ['id_kontak' => $id]);

        if ($update) {
            $this->response([
                'status' => true,
                'message' => 'Kontak berhasil diubah'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kontak gagal diubah'
            ], 404);
        }
    }

    public function kontak_delete_post()
    {
        $id = $this->post('id_kontak');
        $delete = $this->db->delete('kontak', ['id_kontak' => $id]);

        if ($delete) {
            $this->response([
                'status' => true,
                'message' => 'Kontak berhasil dihapus'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kontak gagal dihapus'
            ], 404);
        }
    }

    public function auto_get()
    {
        $telkom = ['0812', '0813', '0821', '0822', '0823', '0852', '0853'];
        $xl = ['0856', '0896', '0897', '0888', '0889'];
        $axis = ['0818', '0819', '0855', '0857', '0858', '0859'];
        $tri = ['0838', '0839', '0831', '0832', '0833', '0834', '0835', '0836', '0837'];
        $indosat = ['0881', '0882', '0883', '0885', '0886', '0887'];
        $smartfren = ['0877', '0878', '0879', '0888', '0889'];

        $provider = [
            'telkom' => $telkom[array_rand($telkom)].str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT),
            'xl' => $xl[array_rand($xl)].str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT),
            'axis' => $axis[array_rand($axis)].str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT),
            'tri' => $tri[array_rand($tri)].str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT),
            'indosat' => $indosat[array_rand($indosat)].str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT),
            'smartfren' => $smartfren[array_rand($smartfren)].str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT),
        ];

        $auto_provider = array();
        for ($i=0; $i < 50; $i++) { 
            $rand_keys = array_rand($provider);
            $nomorhp = $provider[$rand_keys];
            $object = new stdClass();
            $object->nomor_hp = $nomorhp;
            $object->provider = $rand_keys;
            //masukkan object kedalam array $auto_provider
            array_push($auto_provider, $object);
        }

        // print_r(json_encode($auto_provider));
        $this->response([
            'status' => true,
            'data' => $auto_provider, 
        ], 200);
    }
}
