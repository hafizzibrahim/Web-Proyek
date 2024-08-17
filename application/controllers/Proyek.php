<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->model('Lokasi_model'); // Memuat model lokasi
        $this->load->helper('url');     
    }

    public function index() {
        $data['proyek'] = $this->Proyek_model->get_all();
        $this->load->view('proyek/index', $data);
    }

    public function create() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi(); // Ambil data lokasi
        $this->load->view('proyek/create', $data); // Kirim data ke view
    }

    public function store() {
        $data = $this->input->post();
        
        // Pastikan data yang diterima sesuai dengan format yang diharapkan API
        $data_to_send = [
            'namaProyek' => $data['namaProyek'],
            'client' => $data['client'],
            'tglMulai' => $data['tglMulai'],
            'tglSelesai' => $data['tglSelesai'],
            'pimpinanProyek' => $data['pimpinanProyek'],
            'keterangan' => $data['keterangan'],
            'lokasiList' => array_map(function($id) {
                return ['id' => $id];
            }, $data['lokasiList'])
        ];

        // Kirim data ke model untuk disimpan di API
        $this->Proyek_model->create($data_to_send);
        redirect('proyek');
    }

    public function edit($id) {
        $data['proyek'] = $this->Proyek_model->get_by_id($id);
        $this->load->view('proyek/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->Proyek_model->update($id, $data);
        redirect('proyek');
    }

    public function delete($id) {
        $this->Proyek_model->delete($id);
        redirect('proyek');
    }
}