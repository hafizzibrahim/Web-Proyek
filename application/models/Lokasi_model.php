<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    private $api_url;

    public function __construct() {
        parent::__construct();
        $this->api_url = rtrim('http://localhost:8080/lokasi', '/'); // Menghindari trailing slash
    }

    private function send_request($method, $url, $data = null) {
        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => strtoupper($method),
            ],
        ];

        if ($data) {
            $options['http']['content'] = json_encode($data);
        }

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        if ($response === false) {
            log_message('error', 'Request failed: ' . error_get_last()['message']);
            return null; // Mengembalikan null jika terjadi kesalahan
        }

        return json_decode($response, true);
    }

    public function get_all_lokasi() {
        return $this->send_request('GET', $this->api_url) ?: []; // Mengembalikan array kosong jika tidak ada respons
    }

    public function create($data) {
        return $this->send_request('POST', $this->api_url, $data) !== null; // Mengembalikan true jika berhasil
    }

    public function get_by_id($id) {
        return $this->send_request('GET', "{$this->api_url}/{$id}"); // Mengembalikan data lokasi berdasarkan ID
    }

    public function update($id, $data) {
        return $this->send_request('PUT', "{$this->api_url}/{$id}", $data) !== null; // Mengembalikan true jika berhasil
    }

    public function delete($id) {
        return $this->send_request('DELETE', "{$this->api_url}/{$id}") !== null; // Mengembalikan true jika berhasil
    }
}