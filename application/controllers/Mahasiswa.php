<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Mahasiswa');
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->Model_Mahasiswa->getDataMahasiswa()
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }


    /* 
    * tampil data detail 
    * @param id {String} : id siswa
    */
    public function detail($id)
    {
        $data = [
            'mahasiswa' => $this->Model_Mahasiswa->getDataMahasiswa($id)
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    /* 
    * untuk tampil data ubah
    */
    public function ubah($id)
    {
        $data = [
            'mahasiswa' => $this->Model_Mahasiswa->getDataMahasiswa($id)
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Mahasiswa/ubah', $data);
        $this->load->view('templates/footer');
    }

    /* 
        *validasi Inputan Mahasiswa
    */
    public function validation()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required');
        $this->form_validation->set_rules('email', 'E-Mail', 'required');
        return ($this->form_validation->run() == FALSE) ? false : true;
    }


    /* 
    * untuk create data mahasiswa
    */
    public function tambahData()
    {
        if ($this->validation()) {
            $this->Model_Mahasiswa->createMahasiswa();
            $this->session->set_flashdata('flash_mahasiswa', 'Ditambahkan');
            redirect('Mahasiswa');
        } else {
            $this->index();
        }
    }

    /* 
    * untuk update data mahasiswa
    */
    public function updateData()
    {
        if ($this->validation()) {
            $this->Model_Mahasiswa->updateMahasiswa();
            $this->session->set_flashdata('flash_mahasiswa', 'Diupdate');
            redirect('Mahasiswa');
        } else {
            $this->ubah($this->input->post('id'));
        }
    }

    /* 
    * untuk delete data mahasiswa
    */
    public function deleteData($id)
    {
        $this->Model_Mahasiswa->deleteMahasiswa($id);
        $this->session->set_flashdata('flash_mahasiswa', 'Dihapus');
        redirect('Mahasiswa');
    }
}
