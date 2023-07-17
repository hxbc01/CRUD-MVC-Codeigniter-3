<?php defined('BASEPATH') or exit('No direct script access allowed');

class dataModel extends CI_Model
{

    public function getAll()
    {
        return $this->db->get('barang')->result();
    }

    public function post()
    {
        $data = [
            "kode" => $this->input->post("kode"),
            "nama" => $this->input->post("nama"),
            "jumlah" => $this->input->post("jumlah"),
            "harga" => $this->input->post("harga"),
            "jenis" => $this->input->post("jenis"),
        ];
        return $this->db->insert("barang", $data);
    }

    public function delete($kode)
    {
        $this->db->where('kode', $kode);
        return $this->db->delete('barang');
    }

    public function put($kode)
    {
        $data = [
            "nama" => $this->input->post("nama"),
            "jumlah" => $this->input->post("jumlah"),
            "harga" => $this->input->post("harga"),
            "jenis" => $this->input->post("jenis"),
        ];

        $this->db->where("kode", $kode);
        $this->db->update("barang", $data);
    
    }

    public function getById($kode){
        $this->db->where('kode',$kode);
        return $this->db->get('barang')->row();
    }
}
