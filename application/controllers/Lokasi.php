<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
        $this->load->helper('url'); 
    }

    public function index() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('lokasi/index', $data);
    }

    public function create() {
        $this->load->view('lokasi/create');
    }

    public function store() {
        $data = $this->input->post();
        $this->Lokasi_model->create($data);
        redirect('lokasi');
    }

    public function edit($id) {
        $data['lokasi'] = $this->Lokasi_model->get_by_id($id);
        if (!$data['lokasi']) {
            show_404();
        } else {
            $this->load->view('lokasi/edit', $data);
        }
    }
    

    public function update($id) {
        $data = $this->input->post(); // Pastikan data dikirimkan
        if($this->Lokasi_model->update($id, $data)) {
            redirect('lokasi');
        } else {
            // Tambahkan pesan kesalahan jika update gagal
            echo "Update failed";
        }
    }
    

    public function delete($id) {
        $this->Lokasi_model->delete($id);
        redirect('lokasi');
    }
}