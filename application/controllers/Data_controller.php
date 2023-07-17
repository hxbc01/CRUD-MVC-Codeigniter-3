<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dataModel');
    }

    public function index()
    {
        $data['barang'] = $this->dataModel->getAll();
        $this->load->view('dataView', $data);
    }

    public function create()
    {
        $this->dataModel->post();
        redirect('Data_controller');
    }

    public function delete($kode)
    {
        $this->dataModel->delete($kode);
        redirect('Data_controller');
    }

    public function edit($kode)
    {
        $this->input->post('submit');
        $this->dataModel->put($kode);
        redirect('Data_controller');
    }

    public function getData($kode)
    {
        $data['kode'] = $this->dataModel->getById($kode);
        $this->load->view('editView', $data);
    }
}
