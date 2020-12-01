<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Model_Mahasiswa extends CI_Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            // url yang dituju
            'base_uri' => 'http://localhost/belajar/Rest-Server/Api/',
            [
                'auth' => ['admin' => '1234']
            ]
        ]);
    }

    public function getDataMahasiswa($id = null)
    {
        if ($id == null) {
            $response = $this->_client->request(
                'GET',
                'ApiMahasiswa'
            );
            $result = json_decode($response->getBody()->getContents(), true);
            return $result['data'];
        } else {
            $response = $this->_client->request(
                'GET',
                'ApiMahasiswa',
                [
                    'query' => [
                        'id' => $id
                    ]
                ]
            );
            $result = json_decode($response->getBody()->getContents(), true);
            return $result['data'];
        }
    }

    /* 
    * func untuk menambah mahasiswa menggunakan API
    */

    public function deleteMahasiswa($id)
    {
        $response = $this->_client->request(
            'DELETE',
            'ApiMahasiswa',
            [
                'form_params' => ['id' => $id]
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function createMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $response = $this->_client->request(
            'POST',
            'ApiMahasiswa',
            [
                'form_params' => $data
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function updateMahasiswa()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];
        $response = $this->_client->request(
            'PUT',
            'ApiMahasiswa',
            [
                'form_params' => $data
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
