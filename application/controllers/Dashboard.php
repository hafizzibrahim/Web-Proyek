<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
        $this->load->model('Proyek_model');
        $this->load->helper('url'); // Memuat helper URL
    }

    public function index() {
        // Ambil data dari API
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $data['proyek'] = $this->Proyek_model->get_all();
        $data['jumlah_lokasi'] = count($data['lokasi']);
        $data['jumlah_proyek'] = count($data['proyek']);
        $data['jumlah_klien'] = 10; // Ganti dengan logika untuk menghitung jumlah klien jika ada
        $this->load->view('dashboard/index', $data);
    }
}